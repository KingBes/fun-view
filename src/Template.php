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
        'view_dir' => './views/'
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
     * @param string $template 模板名称
     * @param array $vars 数据
     * @return string
     */
    public function fetch(string $template, array $vars = []): string
    {
        if ($vars) {
            $this->data = array_merge($this->data, $vars);
        }
        $template = $this->config['view_dir'] . $template . '.php';
        extract($this->data, EXTR_SKIP);
        ob_start();
        include $template;
        return ob_get_clean();
    }
}
