<?php

namespace FondOfOryx\Zed\OrderBudget\Persistence;

use Generated\Shared\Transfer\OrderBudgetTransfer;

interface OrderBudgetRepositoryInterface
{
    /**
     * @return \Generated\Shared\Transfer\OrderBudgetTransfer[]
     */
    public function findAllOrderBudgets(): array;

    /**
     * @param int $idOrderBudget
     *
     * @return \Generated\Shared\Transfer\OrderBudgetTransfer|null
     */
    public function findOrderBudgetByIdOrderBudget(int $idOrderBudget): ?OrderBudgetTransfer;
}
