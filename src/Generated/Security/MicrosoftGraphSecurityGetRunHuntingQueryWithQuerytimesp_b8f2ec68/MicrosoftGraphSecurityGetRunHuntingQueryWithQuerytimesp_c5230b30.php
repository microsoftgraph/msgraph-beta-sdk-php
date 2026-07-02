<?php

namespace Microsoft\Graph\Beta\Generated\Security\MicrosoftGraphSecurityGetRunHuntingQueryWithQuerytimesp_b8f2ec68;

/**
 * Query a specified set of event, activity, or entity data supported by Microsoft Defender XDR to proactively look for specific threats in your environment, by using a GET request. This function is the GET-based companion to the runHuntingQuery action. It accepts a query in Kusto Query Language (KQL) as a URL parameter, executes it against the advanced hunting schema, and returns the same huntingQueryResults shape as the POST action. Use this function in scenarios that can't issue authenticated POST requests, such as Power BI dashboards that authenticate through Web.Contents. Find out more about hunting for threats across devices, emails, apps, and identities. Learn about KQL. For information on using advanced hunting in the Microsoft Defender portal, see Proactively hunt for threats with advanced hunting in Microsoft Defender XDR. Original name: microsoftGraphSecurityGetRunHuntingQueryWithQuerytimespanTimespanWithWorkspaceIdRequestBuilderGetQueryParameters
*/
class MicrosoftGraphSecurityGetRunHuntingQueryWithQuerytimesp_c5230b30 
{
    /**
     * @var string|null $timespan Usage: timespan='@timespan'
    */
    public ?string $timespan = null;
    
    /**
     * @var string|null $workspaceId Usage: workspaceId=@workspaceId
    */
    public ?string $workspaceId = null;
    
    /**
     * Instantiates a new MicrosoftGraphSecurityGetRunHuntingQueryWithQuerytimesp_c5230b30 and sets the default values.
     * @param string|null $timespan Usage: timespan='@timespan'
     * @param string|null $workspaceId Usage: workspaceId=@workspaceId
    */
    public function __construct(?string $timespan = null, ?string $workspaceId = null) {
        $this->timespan = $timespan;
        $this->workspaceId = $workspaceId;
    }

}
