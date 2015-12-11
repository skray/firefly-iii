<?php

namespace FireflyIII\Helpers\Report;

use Carbon\Carbon;
use FireflyIII\Helpers\Collection\Account as AccountCollection;
use FireflyIII\Helpers\Collection\Balance;
use FireflyIII\Helpers\Collection\Bill as BillCollection;
use FireflyIII\Helpers\Collection\Budget as BudgetCollection;
use FireflyIII\Helpers\Collection\Category as CategoryCollection;
use FireflyIII\Helpers\Collection\Expense;
use FireflyIII\Helpers\Collection\Income;
use Illuminate\Support\Collection;

/**
 * Interface ReportHelperInterface
 *
 * @package FireflyIII\Helpers\Report
 */
interface ReportHelperInterface
{

    /**
     * This method generates a full report for the given period on all
     * the users asset and cash accounts.
     *
     * @param Carbon  $date
     * @param Carbon  $end
     * @param boolean $shared
     *
     * @return AccountCollection
     */
    public function getAccountReport(Carbon $date, Carbon $end, $shared);

    /**
     * This method generates a full report for the given period on all
     * given accounts
     *
     * @param Carbon     $start
     * @param Carbon     $end
     * @param Collection $accounts
     *
     * @return AccountCollection
     */
    public function getAccountReportForList(Carbon $start, Carbon $end, Collection $accounts);

    /**
     * This method generates a full report for the given period on all
     * the users bills and their payments.
     *
     * @param Carbon $start
     * @param Carbon $end
     *
     * @return BillCollection
     */
    public function getBillReport(Carbon $start, Carbon $end);

    /**
     * @param Carbon  $start
     * @param Carbon  $end
     * @param boolean $shared
     *
     * @return Balance
     */
    public function getBalanceReport(Carbon $start, Carbon $end, $shared);

    /**
     * @param Carbon  $start
     * @param Carbon  $end
     * @param Collection $accounts
     *
     * @return Balance
     */
    public function getBalanceReportForList(Carbon $start, Carbon $end, Collection $accounts);

    /**
     * @param Carbon  $start
     * @param Carbon  $end
     * @param boolean $shared
     *
     * @return BudgetCollection
     */
    public function getBudgetReport(Carbon $start, Carbon $end, $shared);

    /**
     * @param Carbon     $start
     * @param Carbon     $end
     * @param Collection $accounts
     *
     * @return BudgetCollection
     */
    public function getBudgetReportForList(Carbon $start, Carbon $end, Collection $accounts);

    /**
     * @param Carbon  $start
     * @param Carbon  $end
     * @param boolean $shared
     *
     * @return CategoryCollection
     */
    public function getCategoryReport(Carbon $start, Carbon $end, $shared);

    /**
     * @param Carbon     $start
     * @param Carbon     $end
     * @param Collection $accounts
     *
     * @return CategoryCollection
     */
    public function getCategoryReportForList(Carbon $start, Carbon $end, Collection $accounts);

    /**
     * Get a full report on the users expenses during the period.
     *
     * @param Carbon  $start
     * @param Carbon  $end
     * @param boolean $shared
     *
     * @return Expense
     */
    public function getExpenseReport($start, $end, $shared);

    /**
     * Get a full report on the users expenses during the period for a list of accounts.
     *
     * @param Carbon     $start
     * @param Carbon     $end
     * @param Collection $accounts
     *
     * @return Expense
     */
    public function getExpenseReportForList($start, $end, Collection $accounts);

    /**
     * Get a full report on the users incomes during the period.
     *
     * @param Carbon  $start
     * @param Carbon  $end
     * @param boolean $shared
     *
     * @return Income
     */
    public function getIncomeReport($start, $end, $shared);

    /**
     * Get a full report on the users incomes during the period for the given accounts.
     *
     * @param Carbon     $start
     * @param Carbon     $end
     * @param Collection $accounts
     *
     * @return Income
     */
    public function getIncomeReportForList($start, $end, Collection $accounts);

    /**
     * @param Carbon $date
     *
     * @return array
     */
    public function listOfMonths(Carbon $date);

}
