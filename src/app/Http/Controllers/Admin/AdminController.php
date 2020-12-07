<?php
/**
 * @author: nguyentinh
 * @create: 06/20/20, 8:21 PM
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\ConfigService;

/**
 * Class SiteController.
 */
class AdminController extends Controller
{
    public $page_number;
    protected array $data;
    protected $theme = 'default';

    public function __construct()
    {
        $this->page_number = config('constant.PAGE_NUMBER');
        $config = ConfigService::getConfig();

        if (!empty($config['theme_active'])) {
            $this->theme = $config['theme_active'];
        }
        $manifest = @json_decode(file_get_contents(public_path('layout/' . $this->theme . '/manifest.json')), true);
        $this->data = [
            'manifest' => $manifest,
            'title' => ucfirst(str_replace('_', ' ', request()->segment(2))),
            'config' => $config,
            'theme' => $this->theme
        ];
    }

    public function render($data)
    {
        $this->data['success'] = session('success');
        $this->data['error'] = session('error');

        return array_merge($this->data, $data);
    }
}
