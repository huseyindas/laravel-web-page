<?php

namespace App\Http\Controllers;

use App\Models\Abaout;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Counter;
use App\Models\Logo;
use App\Models\RefDesc;
use App\Models\Referance;
use App\Models\Service;
use App\Models\ServiceDesc;
use App\Models\Slider;
use App\Models\Social;
use App\Models\VideoBar;
use Database\Seeders\RefDescSeeder;
use Database\Seeders\ServiceDescSeeder;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index () {

        $abaouts = Abaout::all()->take(1);
        $socials = Social::all()->take(1);
        $sliders = Slider::all()->take(1);
        $counters = Counter::all()->take(1);
        $comments = Comment::all();
        $services = Service::all()->take(6);
        $serviceshead = Service::all()->take(4);
        $servicesdescs = ServiceDesc::all()->take(1);
        $videobars = VideoBar::all()->take(1);
        $referancehead = RefDesc::all()->take(1);
        $referances = Referance::all();
        $infos = Contact::all()->take(1);
        $logo = Logo::all()->where("logo")->take(1);
        $flogo = Logo::all()->where("flogo")->take(1);
        $favicon = Logo::all()->where("favicon")->take(1);
        return view("index", compact("sliders",
            "socials", "abaouts", "counters", "comments",
            "services", "serviceshead", "servicesdescs", "videobars",
            "referancehead", "referances", "infos", "logo", "flogo", "favicon"
        ));
    }

}
