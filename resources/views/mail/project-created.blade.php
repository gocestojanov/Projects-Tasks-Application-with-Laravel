@component('mail::message')
# Introduction {{ $project->title }}

{{ $project->description }}


The body of your message.

@component('mail::button', ['url' => url('/project/') . $project->id])
View Project
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
