<?php

declare(strict_types=1);

namespace Kingbes\FunView;

class Template
{
    /**
     * 模板变量
     * @var array
     */
    protected array $data = [];

    /**
     * 模板配置
     *
     * @var array
     */
    protected array $config = [
        // 模板目录
        'view_dir'      =>  './views/',
        // 模板布局
        'layout_name'   =>  'layout',
        'layout_item'   =>  '__CONTENT__',
    ];

    /**
     * 构造函数
     * @access public
     * @param  array $config 模板参数
     */
    public function __construct(array $config = [])
    {
        $this->config = array_merge($this->config, $config);
    }

    /**
     * 查找模板文件所在目录及其上级目录中的布局文件
     *
     * 该方法会从模板文件所在的目录开始，逐级向上查找名为 `layout.php` 的布局文件，
     * 并将找到的布局文件路径添加到一个数组中，直到到达指定的根目录或者文件系统的根目录为止。
     *
     * @param string $template 模板文件的路径
     * @return array 包含找到的布局文件路径的数组
     */
    protected function layoutFile(string $template): array
    {
        // 获取文件所在的目录
        $currentDir = dirname($template);
        // 用于保存找到的layout.php文件路径
        $layoutFiles = [];
        // 循环查找上级目录中的布局文件
        while (true) {
            // 当前目录下查找layout.php
            $layoutFilePath = $currentDir
                . DIRECTORY_SEPARATOR
                . $this->config["layout_name"] . '.php';
            // 检查当前目录下是否存在布局文件
            if (file_exists($layoutFilePath)) {
                // 若存在，将布局文件路径添加到结果数组中
                $layoutFiles[] = $layoutFilePath;
            }
            // 如果当前目录是根目录(view)，则停止查找
            if (basename($currentDir) == $this->config['view_dir']) {
                break;
            }
            // 移动到上级目录
            $upperDir = dirname($currentDir);
            // 如果无法再向上（即到达了文件系统的根目录），则退出循环
            if ($upperDir === $currentDir) {
                break;
            }
            // 更新当前目录为上级目录
            $currentDir = $upperDir;
        }
        // 返回包含所有找到的布局文件路径的数组
        return $layoutFiles;
    }

    /**
     * 模板变量赋值
     * @access public
     * @param  array $vars 模板变量
     * @return $this
     */
    public function assign(array $vars = []): static
    {
        $this->data = array_merge($this->data, $vars);
        return $this;
    }

    /**
     * 渲染模板 function
     *
     * @param string $file
     * @param array $vars
     * @return string
     */
    public function render(string $file, array $vars = []): string
    {
        if ($vars) {
            $this->data = array_merge($this->data, $vars);
        }
        extract($this->data, EXTR_SKIP);
        ob_start();
        try {
            include $file;
        } catch (\Throwable $e) {
            ob_end_clean();
            throw $e;
        }
        return ob_get_clean();
    }

    /**
     * 渲染模板 function
     *
     * @param string $template 模板名称
     * @param array $vars 数据
     * @return string
     */
    public function fetch(string $template, array $vars = []): string
    {
        $template = $this->config['view_dir'] . $template . '.php';
        $view = $this->render($template, $vars);
        $layoutFiles = $this->layoutFile($template);
        foreach ($layoutFiles as $layoutFile) {
            $view = $this->render($layoutFile, [$this->config["layout_item"] => $view]);
        }
        return $view;
    }
}
