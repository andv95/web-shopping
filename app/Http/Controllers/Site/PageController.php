<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\SendContactRequest;
use App\Models\Admin\Contact;
use App\Models\Admin\Faq;
use App\Models\Admin\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function index($slug)
    {
        $page = Page::getBySlug($slug);
        if (!$page) {
            return abort(404);
        }
        $args = [];
        $view = 'site.page.default';
        if ($page->template) {
            $view = 'site.page.'. $page->template;
        }
        if ($page->template == 'faq') {
            $args['faq'] = Faq::getList()->get();
        }

        return view($view, ['page' => $page, 'args' =>$args]);
    }

    public function sendContact(SendContactRequest $request)
    {
        $params = $request->all();
        Contact::storeUpdate($params, null, $request);
        return $this->ajaxSuccessResponse(
            ['url' => route('page.all', 'question')],
            'Cảm ơn bạn đã liên hệ với chúng tôi chúng tôi sẽ phản hồi lại bạn trong thời gian ngắn nhất !'
        );
    }
}
