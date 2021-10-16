<x-tests.app>
    <x-slot name="header">ヘッダー1</x-slot>
    コンポーネントテスト２

    <x-test-class-base classBaseMessage="メッセージです。"/>
    <div class="mb-4"></div><!-- /mb-4 -->
    <x-test-class-base classBaseMessage="メッセージです。" defaultMessage="初期値を変更しました。"/>
</x-tests.app>
