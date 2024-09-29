@props(['width','employer'])

<img src="{{strpos($employer->logo, 'https') !== false ? $employer->logo : '/public/'.$employer->logo}}" alt="#" class="rounded-xl
w-[80px]" />