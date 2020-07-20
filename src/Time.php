<?php declare(strict_types=1);

namespace Amberovsky\Time;

/**
 * Utility class to make testing possible when it is about timings
 */
class Time {
    private bool $isFrozen = false;
    private int $frozenTime = 0;

    /**
     * Freezes time so all subsequent getTimestamp() requests return exactly $timestamp
     *
     * @param int $timestamp
     */
    public function freeze(int $timestamp): void {
        $this->isFrozen = true;
        $this->frozenTime = $timestamp;
    }

    public function unfreeze(): void {
        $this->isFrozen = false;
    }

    public function getTimestamp(): int {
        return $this->isFrozen ? $this->frozenTime : time();
    }
}
