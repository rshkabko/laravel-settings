<?php

namespace Flamix\Settings\Storages;

class MemorySettingStore extends SettingStore
{
	public function __construct(array $data = null)
	{
		if ($data) {
			$this->data = $data;
		}
	}

	protected function read()
	{
		return $this->data;
	}

	protected function write(array $data)
	{
		// do nothing
	}
}
