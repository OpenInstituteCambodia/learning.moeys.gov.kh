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

    echo "-----> Fetching new changes..."
    if [ -d ".git" ]; then
        git pull origin master --rebase
    else
        git clone {{ $remote }} .
    fi
@endtask

@task('build')
    cd {{ $source_dir }}

    echo "-----> Installing dependencies..."
    yarn

    echo "-----> Building production application..."
    yarn build

    {{-- Create deploy directory if not exist --}}
    if [ ! -d "{{ $deploy_dir }}" ]; then
        mkdir -p {{ $deploy_dir }}
    fi

    echo "-----> Copying distribution asset..."
    cp -r {{ $source_dir }}/dist/* {{ $deploy_dir }}
    cd {{ $deploy_dir }}
    ls -la
    echo "-----> Deploy complete successfully"
@endtask
