@servers(['web' => ['sdp@learn.moeys.gov.kh']])

@php
    $name = "learn.moeys.gov.kh";
    $remote = "https://github.com/OpenInstituteCambodia/learning.moeys.gov.kh.git";

    $source_dir = "~/src/{$name}";
    $deploy_dir = "~/{$name}";
@endphp

@story('deploy')
    git
    build
@endstory

@task('git', ['on' => 'web'])
    {{-- Create src directory if not exist --}}
    if [ ! -d "{{ $source_dir }}" ]; then
        mkdir -p {{ $source_dir }}
    fi

    cd {{ $source_dir }}

    if [ -d ".git" ]; then
        git pull origin master --rebase
    else
        git clone {{ $remote }} .
    fi
@endtask

@task('build')
    ./deploy.sh
@endtask
