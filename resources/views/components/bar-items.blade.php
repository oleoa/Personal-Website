<a href="{{route('home')}}" @class([
  "h-min hover:text-white hover:font-bold loaderActivator",
  "text-blue-400" => $current=='home'
])>
  @lang("bar.home")
</a>
<a href="{{route('portfolio')}}" @class([
  "h-min hover:text-white hover:font-bold loaderActivator",
  "text-blue-400" => $current=='portfolio'
])>
  @lang("bar.portfolio")
</a>
<a href="{{route('library')}}" @class([
  "h-min hover:text-white hover:font-bold loaderActivator",
  "text-blue-400" => $current=='library'
])>
  @lang("bar.library")
</a>
<a href="{{route('contact')}}" @class([
  "h-min hover:text-white hover:font-bold loaderActivator",
  "text-blue-400" => $current=='contact'
])>
  @lang("bar.contact")
</a>
