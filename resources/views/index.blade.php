@extends('layouts.default')
@section('content')
    <div class="col-xs-12 col-sm-9">
        <div class="col-lg-4">
            <i class="fa fa-book fa-20" aria-hidden="true"></i>
            <h2>Laravelの基本を学びます</h2>
            <p>FacadeやEloquentといった強力なコンポーネントを使った開発方法を習得しましょう。用意されているコンポーネントを用いて基本的な使い方を習得します。</p>
            <p><a class="btn btn-primary" href="{{ route('learning.level.index', ['beginner']) }}" role="button">View details »</a></p>
        </div>
        <div class="col-lg-4">
            <i class="fa fa-code fa-20" aria-hidden="true"></i>
            <h2>中級者向けへの手引き</h2>
            <p>サービスコンテナを用いて、サービスロケータ、DI(Dependency
                Injection)を学び、再利用性の高いアプリケーション開発手法を習得します。フレームワークの内部を知り、様々な拡張に役立てるようにそれぞれのコンポーネント間の関係を理解しましょう。</p>
            <p><a class="btn btn-primary" href="#" role="button">View details »</a></p>
        </div>
        <div class="col-lg-4">
            <i class="fa fa-cubes fa-20" aria-hidden="true"></i>
            <h2>より高度な手法の習得</h2>
            <p>より疎結合なアプリケーション開発手法を学習し、開発規模に合わせたより高度なアプリケーション設計を習得します。</p>
            <p><a class="btn btn-primary" href="#" role="button">View details »</a></p>
        </div>
    </div>
@stop
