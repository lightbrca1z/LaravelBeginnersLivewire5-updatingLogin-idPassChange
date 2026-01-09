<?php

namespace App\Livewire;

use Livewire\Component;

class HelloComponent extends Component
{
    public $message = '';
    public $name = '';
    public $pass = '';
    public $check = '';

    // 更新されたプロパティ名を一時的に保存する配列
    public $updatedFields = [];

    public function mount()
    {
        $this->name    = 'no name';
        $this->pass    = '';
        $this->check   = 'no check';
        $this->message = 'Event book';
    }

    // どのプロパティが更新されたかを記録
    public function updating($propertyName)
    {
        if (!in_array($propertyName, $this->updatedFields, true)) {
            $this->updatedFields[] = $propertyName;
        }
    }

    // ボタン押下時にメッセージを更新
    public function updateMessageText()
    {
        // name / pass だけを対象にする（message や check は除外）
        $targets = array_values(
            array_filter(
                $this->updatedFields,
                fn ($p) => in_array($p, ['name', 'pass'], true)
            )
        );

        if (empty($targets)) {
            $this->message = ' no check';
        } else {
            $this->message = ' ' . implode(', ', $targets);
        }

        // 次の更新のためにリセット
        $this->updatedFields = [];
        $this->check         = 'no check';
    }

    public function render()
    {
        // あなたの Blade ファイル名に合わせて変更
        return view('livewire.hello-component');
    }
}
