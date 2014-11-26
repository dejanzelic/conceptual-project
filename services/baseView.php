<?php
//@TODO: Credit https://github.com/allaire/Slim-framework-custom-view
class BaseView extends \Slim\View
{
    protected $_layout = NULL;
    protected $_data   = NULL;
    protected $content = NULL;

    public function set_layout($layout = NULL, $data = array())
    {
        $this->_layout = $layout;
        $this->_data = $data;
    }
    /**
     * Overwrite the render method of Slim_View in order to include it in a layout
     */
    protected function render($template, $data = null)
    {
        $templatePathname = $this->getTemplatePathname($template);
        if (!is_file($templatePathname)) {
            throw new \RuntimeException("View cannot render `$template` because the template does not exist");
        }

        $data = array_merge($this->data->all(), (array) $data);
        extract($data);
        ob_start();
        require $templatePathname;
        $this->content = ob_get_clean();

        return $this->_render_layout($this->content);
    }
    /**
     * Create a similar render method but for the layout (called by the official render method)
     * At the moment, you have to use $content in your layout to load up your view
     */
    private function _render_layout()
    {
        if($this->_layout !== NULL)
        {
            $layout_path = $this->getTemplatesDirectory() . '/' . ltrim($this->_layout, '/');
            if (!file_exists($layout_path))
            {
                throw new RuntimeException('View cannot render layout `' . $layout_path . '`. Layout does not exist.');
            }
            // Base layout variables
            extract($this->_data);
            ob_start();
            require $layout_path;
            $view = ob_get_clean();
        }
        return $view;
    }
}
?>