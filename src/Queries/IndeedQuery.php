<?php namespace JobApis\Jobs\Client\Queries;

class IndeedQuery extends AbstractQuery
{
    /**
     * q
     *
     * The search query.
     *
     * @var string
     */
    protected $q;

    /**
     * l
     *
     * The search location.
     *
     * @var string
     */
    protected $l;

    /**
     * Start
     *
     * Offset, seems to be used in lieu of pagination
     *
     * @var integer
     */
    protected $start;

    /**
     * Get baseUrl
     *
     * @return  string Value of the base url to this api
     */
    public function getBaseUrl()
    {
        return 'https://rss.indeed.com/rss';
    }

    /**
     * Get keyword
     *
     * @return  string Attribute being used as the search keyword
     */
    public function getKeyword()
    {
        return $this->q;
    }

    /**
     * Required parameters
     *
     * @return array
     */
    protected function requiredAttributes()
    {
        return [
            'q',
            'l',
        ];
    }
}
