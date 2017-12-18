<div class="col-auto mr-md-auto g-px-15">
    <div class="col-auto g-pos-rel g-z-index-3 g-px-15">
        <a href="#" id="languages-dropdown-invoker-2" class="g-color-white g-text-underline--none--hover" aria-controls="languages-dropdown-2" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#languages-dropdown-2"
           data-dropdown-type="css-animation" data-dropdown-duration="300" data-dropdown-hide-on-scroll="false" data-dropdown-animation-in="fadeIn" data-dropdown-animation-out="fadeOut">{{LaravelLocalization::getCurrentLocale()}}
            <i class="fa fa-angle-down g-ml-3"></i>
        </a>

        <ul id="languages-dropdown-2" class="list-unstyled g-pos-abs g-left-0 g-bg-gray-dark-v1 g-width-160 g-pb-5 g-mt-12" aria-labelledby="languages-dropdown-invoker-2">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <li>
                    <a class="d-block g-color-white g-color-primary--hover g-text-underline--none--hover g-py-5 g-px-20"
                       hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        {{ $properties['native'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>

{{--
<div class="col-4 col-lg-2 g-pos-rel g-px-15 ml-auto">
    <a id="languages-dropdown-invoker" class="g-color-secondary-dark-v1 g-color-primary--hover g-text-underline--none--hover" href="#"
       aria-controls="languages-dropdown"
       aria-haspopup="true"
       aria-expanded="false"
       data-dropdown-event="hover"
       data-dropdown-target="#languages-dropdown"
       data-dropdown-type="css-animation"
       data-dropdown-duration="300"
       data-dropdown-hide-on-scroll="false"
       data-dropdown-animation-in="fadeIn"
       data-dropdown-animation-out="fadeOut">
        <img src="/img/{{LaravelLocalization::getCurrentLocale()}}.svg">
        <span>{{ LaravelLocalization::getCurrentLocaleNative() }}</span> <i class="g-hidden-sm-down fa fa-angle-down g-ml-7"></i>
    </a>

    <ul id="languages-dropdown" class="list-unstyled g-width-160 g-brd-around g-brd-secondary-light-v2 g-bg-white rounded g-pos-abs g-py-5"
        aria-labelledby="languages-dropdown-invoker">
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <li>
                <a rel="alternate" id="color-link" class="d-block g-color-secondary-dark-v1 g-color-primary--hover g-text-underline--none--hover g-py-5 g-px-20"
                   hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                    <img src="/img/{{ $localeCode }}.svg" alt="">
                    {{ $properties['native'] }}
                </a>
            </li>
        @endforeach
    </ul>
</div>--}}
