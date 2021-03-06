<?php

namespace FondOfOryx\Zed\OrderBudget\Business\Writer;

use Generated\Shared\Transfer\OrderBudgetTransfer;

interface OrderBudgetWriterInterface
{
    /**
     * @param int|null $budget
     *
     * @return \Generated\Shared\Transfer\OrderBudgetTransfer
     */
    public function create(?int $budget = null): OrderBudgetTransfer;

    /**
     * @param \Generated\Shared\Transfer\OrderBudgetTransfer $orderBudgetTransfer
     *
     * @return void
     */
    public function update(OrderBudgetTransfer $orderBudgetTransfer): void;
}
