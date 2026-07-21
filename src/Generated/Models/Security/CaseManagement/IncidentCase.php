<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\CaseManagement;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class IncidentCase extends EscapedCase implements Parsable 
{
    /**
     * Instantiates a new IncidentCase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.caseManagement.incidentCase');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IncidentCase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IncidentCase {
        return new IncidentCase();
    }

    /**
     * Gets the aiAgentIds property value. The list of AI agent identifiers associated with the incident.
     * @return array<string>|null
    */
    public function getAiAgentIds(): ?array {
        $val = $this->getBackingStore()->get('aiAgentIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'aiAgentIds'");
    }

    /**
     * Gets the alertCounts property value. A summary of alert counts grouped by severity and status.
     * @return AlertCounts|null
    */
    public function getAlertCounts(): ?AlertCounts {
        $val = $this->getBackingStore()->get('alertCounts');
        if (is_null($val) || $val instanceof AlertCounts) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alertCounts'");
    }

    /**
     * Gets the alertPolicyIds property value. The list of alert policy identifiers associated with the incident.
     * @return array<string>|null
    */
    public function getAlertPolicyIds(): ?array {
        $val = $this->getBackingStore()->get('alertPolicyIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alertPolicyIds'");
    }

    /**
     * Gets the assignedTo property value. The user assigned to investigate the incident case.
     * @return string|null
    */
    public function getAssignedTo(): ?string {
        $val = $this->getBackingStore()->get('assignedTo');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignedTo'");
    }

    /**
     * Gets the associatedThreatIds property value. The list of threat identifiers associated with the incident.
     * @return array<string>|null
    */
    public function getAssociatedThreatIds(): ?array {
        $val = $this->getBackingStore()->get('associatedThreatIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'associatedThreatIds'");
    }

    /**
     * Gets the categories property value. The incident categories.
     * @return array<string>|null
    */
    public function getCategories(): ?array {
        $val = $this->getBackingStore()->get('categories');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'categories'");
    }

    /**
     * Gets the classification property value. The classification property
     * @return IncidentClassification|null
    */
    public function getClassification(): ?IncidentClassification {
        $val = $this->getBackingStore()->get('classification');
        if (is_null($val) || $val instanceof IncidentClassification) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'classification'");
    }

    /**
     * Gets the cloudScopes property value. The cloud scopes associated with the incident.
     * @return array<string>|null
    */
    public function getCloudScopes(): ?array {
        $val = $this->getBackingStore()->get('cloudScopes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudScopes'");
    }

    /**
     * Gets the dataSensitivityLabels property value. The data sensitivity labels associated with the incident.
     * @return array<string>|null
    */
    public function getDataSensitivityLabels(): ?array {
        $val = $this->getBackingStore()->get('dataSensitivityLabels');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dataSensitivityLabels'");
    }

    /**
     * Gets the dataStreams property value. The data streams associated with the incident.
     * @return array<string>|null
    */
    public function getDataStreams(): ?array {
        $val = $this->getBackingStore()->get('dataStreams');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dataStreams'");
    }

    /**
     * Gets the detectionSources property value. The detection sources that identified the incident.
     * @return array<string>|null
    */
    public function getDetectionSources(): ?array {
        $val = $this->getBackingStore()->get('detectionSources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'detectionSources'");
    }

    /**
     * Gets the determination property value. The determination property
     * @return IncidentDetermination|null
    */
    public function getDetermination(): ?IncidentDetermination {
        $val = $this->getBackingStore()->get('determination');
        if (is_null($val) || $val instanceof IncidentDetermination) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'determination'");
    }

    /**
     * Gets the dueDateTime property value. The target completion date and time for the incident case.
     * @return DateTime|null
    */
    public function getDueDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('dueDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dueDateTime'");
    }

    /**
     * Gets the emailNotificationRecipients property value. The email notification recipients for the incident case.
     * @return array<string>|null
    */
    public function getEmailNotificationRecipients(): ?array {
        $val = $this->getBackingStore()->get('emailNotificationRecipients');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'emailNotificationRecipients'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'aiAgentIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAiAgentIds($val);
            },
            'alertCounts' => fn(ParseNode $n) => $o->setAlertCounts($n->getObjectValue([AlertCounts::class, 'createFromDiscriminatorValue'])),
            'alertPolicyIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAlertPolicyIds($val);
            },
            'assignedTo' => fn(ParseNode $n) => $o->setAssignedTo($n->getStringValue()),
            'associatedThreatIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAssociatedThreatIds($val);
            },
            'categories' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setCategories($val);
            },
            'classification' => fn(ParseNode $n) => $o->setClassification($n->getEnumValue(IncidentClassification::class)),
            'cloudScopes' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setCloudScopes($val);
            },
            'dataSensitivityLabels' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDataSensitivityLabels($val);
            },
            'dataStreams' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDataStreams($val);
            },
            'detectionSources' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDetectionSources($val);
            },
            'determination' => fn(ParseNode $n) => $o->setDetermination($n->getEnumValue(IncidentDetermination::class)),
            'dueDateTime' => fn(ParseNode $n) => $o->setDueDateTime($n->getDateTimeValue()),
            'emailNotificationRecipients' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setEmailNotificationRecipients($val);
            },
            'firstEventTime' => fn(ParseNode $n) => $o->setFirstEventTime($n->getDateTimeValue()),
            'impactedAssets' => fn(ParseNode $n) => $o->setImpactedAssets($n->getObjectValue([ImpactedAssetsCounts::class, 'createFromDiscriminatorValue'])),
            'incidentId' => fn(ParseNode $n) => $o->setIncidentId($n->getIntegerValue()),
            'incidentWebUrl' => fn(ParseNode $n) => $o->setIncidentWebUrl($n->getStringValue()),
            'investigation' => fn(ParseNode $n) => $o->setInvestigation($n->getObjectValue([Investigation::class, 'createFromDiscriminatorValue'])),
            'investigationIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setInvestigationIds($val);
            },
            'investigationStates' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setInvestigationStates($val);
            },
            'lastEventTime' => fn(ParseNode $n) => $o->setLastEventTime($n->getDateTimeValue()),
            'machineGroupIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setMachineGroupIds($val);
            },
            'osPlatforms' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setOsPlatforms($val);
            },
            'policyNames' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setPolicyNames($val);
            },
            'priorityScore' => fn(ParseNode $n) => $o->setPriorityScore($n->getIntegerValue()),
            'productNames' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setProductNames($val);
            },
            'redirectCaseId' => fn(ParseNode $n) => $o->setRedirectCaseId($n->getIntegerValue()),
            'redirectIncidentId' => fn(ParseNode $n) => $o->setRedirectIncidentId($n->getIntegerValue()),
            'serviceSources' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setServiceSources($val);
            },
            'severity' => fn(ParseNode $n) => $o->setSeverity($n->getEnumValue(IncidentSeverity::class)),
            'summary' => fn(ParseNode $n) => $o->setSummary($n->getStringValue()),
            'systemTags' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSystemTags($val);
            },
            'topRiskScore' => fn(ParseNode $n) => $o->setTopRiskScore($n->getIntegerValue()),
            'workspaceIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setWorkspaceIds($val);
            },
        ]);
    }

    /**
     * Gets the firstEventTime property value. The date and time of the first event in the incident.
     * @return DateTime|null
    */
    public function getFirstEventTime(): ?DateTime {
        $val = $this->getBackingStore()->get('firstEventTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'firstEventTime'");
    }

    /**
     * Gets the impactedAssets property value. A summary of impacted asset counts for the incident.
     * @return ImpactedAssetsCounts|null
    */
    public function getImpactedAssets(): ?ImpactedAssetsCounts {
        $val = $this->getBackingStore()->get('impactedAssets');
        if (is_null($val) || $val instanceof ImpactedAssetsCounts) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'impactedAssets'");
    }

    /**
     * Gets the incidentId property value. The Microsoft Security incident identifier.
     * @return int|null
    */
    public function getIncidentId(): ?int {
        $val = $this->getBackingStore()->get('incidentId');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'incidentId'");
    }

    /**
     * Gets the incidentWebUrl property value. The URL for the incident in the Microsoft Defender portal.
     * @return string|null
    */
    public function getIncidentWebUrl(): ?string {
        $val = $this->getBackingStore()->get('incidentWebUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'incidentWebUrl'");
    }

    /**
     * Gets the investigation property value. A summary of investigation details associated with the incident.
     * @return Investigation|null
    */
    public function getInvestigation(): ?Investigation {
        $val = $this->getBackingStore()->get('investigation');
        if (is_null($val) || $val instanceof Investigation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'investigation'");
    }

    /**
     * Gets the investigationIds property value. The list of investigation identifiers associated with the incident.
     * @return array<string>|null
    */
    public function getInvestigationIds(): ?array {
        $val = $this->getBackingStore()->get('investigationIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'investigationIds'");
    }

    /**
     * Gets the investigationStates property value. The list of investigation states associated with the incident.
     * @return array<string>|null
    */
    public function getInvestigationStates(): ?array {
        $val = $this->getBackingStore()->get('investigationStates');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'investigationStates'");
    }

    /**
     * Gets the lastEventTime property value. The date and time of the most recent event in the incident.
     * @return DateTime|null
    */
    public function getLastEventTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastEventTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastEventTime'");
    }

    /**
     * Gets the machineGroupIds property value. The list of machine group identifiers associated with the incident.
     * @return array<string>|null
    */
    public function getMachineGroupIds(): ?array {
        $val = $this->getBackingStore()->get('machineGroupIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'machineGroupIds'");
    }

    /**
     * Gets the osPlatforms property value. The operating system platforms associated with the incident.
     * @return array<string>|null
    */
    public function getOsPlatforms(): ?array {
        $val = $this->getBackingStore()->get('osPlatforms');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'osPlatforms'");
    }

    /**
     * Gets the policyNames property value. The policy names associated with the incident.
     * @return array<string>|null
    */
    public function getPolicyNames(): ?array {
        $val = $this->getBackingStore()->get('policyNames');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyNames'");
    }

    /**
     * Gets the priorityScore property value. The priority score assigned to the incident.
     * @return int|null
    */
    public function getPriorityScore(): ?int {
        $val = $this->getBackingStore()->get('priorityScore');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'priorityScore'");
    }

    /**
     * Gets the productNames property value. The product names associated with the incident.
     * @return array<string>|null
    */
    public function getProductNames(): ?array {
        $val = $this->getBackingStore()->get('productNames');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'productNames'");
    }

    /**
     * Gets the redirectCaseId property value. The case identifier to which this case redirects when merged.
     * @return int|null
    */
    public function getRedirectCaseId(): ?int {
        $val = $this->getBackingStore()->get('redirectCaseId');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'redirectCaseId'");
    }

    /**
     * Gets the redirectIncidentId property value. The incident identifier to which this incident redirects when merged.
     * @return int|null
    */
    public function getRedirectIncidentId(): ?int {
        $val = $this->getBackingStore()->get('redirectIncidentId');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'redirectIncidentId'");
    }

    /**
     * Gets the serviceSources property value. The service sources associated with the incident.
     * @return array<string>|null
    */
    public function getServiceSources(): ?array {
        $val = $this->getBackingStore()->get('serviceSources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serviceSources'");
    }

    /**
     * Gets the severity property value. The severity property
     * @return IncidentSeverity|null
    */
    public function getSeverity(): ?IncidentSeverity {
        $val = $this->getBackingStore()->get('severity');
        if (is_null($val) || $val instanceof IncidentSeverity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'severity'");
    }

    /**
     * Gets the summary property value. A summary of the incident.
     * @return string|null
    */
    public function getSummary(): ?string {
        $val = $this->getBackingStore()->get('summary');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'summary'");
    }

    /**
     * Gets the systemTags property value. The system tags associated with the incident.
     * @return array<string>|null
    */
    public function getSystemTags(): ?array {
        $val = $this->getBackingStore()->get('systemTags');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'systemTags'");
    }

    /**
     * Gets the topRiskScore property value. The top risk score associated with the incident.
     * @return int|null
    */
    public function getTopRiskScore(): ?int {
        $val = $this->getBackingStore()->get('topRiskScore');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'topRiskScore'");
    }

    /**
     * Gets the workspaceIds property value. The list of workspace identifiers associated with the incident.
     * @return array<string>|null
    */
    public function getWorkspaceIds(): ?array {
        $val = $this->getBackingStore()->get('workspaceIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'workspaceIds'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('aiAgentIds', $this->getAiAgentIds());
        $writer->writeObjectValue('alertCounts', $this->getAlertCounts());
        $writer->writeCollectionOfPrimitiveValues('alertPolicyIds', $this->getAlertPolicyIds());
        $writer->writeStringValue('assignedTo', $this->getAssignedTo());
        $writer->writeCollectionOfPrimitiveValues('associatedThreatIds', $this->getAssociatedThreatIds());
        $writer->writeCollectionOfPrimitiveValues('categories', $this->getCategories());
        $writer->writeEnumValue('classification', $this->getClassification());
        $writer->writeCollectionOfPrimitiveValues('cloudScopes', $this->getCloudScopes());
        $writer->writeCollectionOfPrimitiveValues('dataSensitivityLabels', $this->getDataSensitivityLabels());
        $writer->writeCollectionOfPrimitiveValues('dataStreams', $this->getDataStreams());
        $writer->writeCollectionOfPrimitiveValues('detectionSources', $this->getDetectionSources());
        $writer->writeEnumValue('determination', $this->getDetermination());
        $writer->writeDateTimeValue('dueDateTime', $this->getDueDateTime());
        $writer->writeCollectionOfPrimitiveValues('emailNotificationRecipients', $this->getEmailNotificationRecipients());
        $writer->writeDateTimeValue('firstEventTime', $this->getFirstEventTime());
        $writer->writeObjectValue('impactedAssets', $this->getImpactedAssets());
        $writer->writeIntegerValue('incidentId', $this->getIncidentId());
        $writer->writeStringValue('incidentWebUrl', $this->getIncidentWebUrl());
        $writer->writeObjectValue('investigation', $this->getInvestigation());
        $writer->writeCollectionOfPrimitiveValues('investigationIds', $this->getInvestigationIds());
        $writer->writeCollectionOfPrimitiveValues('investigationStates', $this->getInvestigationStates());
        $writer->writeDateTimeValue('lastEventTime', $this->getLastEventTime());
        $writer->writeCollectionOfPrimitiveValues('machineGroupIds', $this->getMachineGroupIds());
        $writer->writeCollectionOfPrimitiveValues('osPlatforms', $this->getOsPlatforms());
        $writer->writeCollectionOfPrimitiveValues('policyNames', $this->getPolicyNames());
        $writer->writeIntegerValue('priorityScore', $this->getPriorityScore());
        $writer->writeCollectionOfPrimitiveValues('productNames', $this->getProductNames());
        $writer->writeIntegerValue('redirectCaseId', $this->getRedirectCaseId());
        $writer->writeIntegerValue('redirectIncidentId', $this->getRedirectIncidentId());
        $writer->writeCollectionOfPrimitiveValues('serviceSources', $this->getServiceSources());
        $writer->writeEnumValue('severity', $this->getSeverity());
        $writer->writeStringValue('summary', $this->getSummary());
        $writer->writeCollectionOfPrimitiveValues('systemTags', $this->getSystemTags());
        $writer->writeIntegerValue('topRiskScore', $this->getTopRiskScore());
        $writer->writeCollectionOfPrimitiveValues('workspaceIds', $this->getWorkspaceIds());
    }

    /**
     * Sets the aiAgentIds property value. The list of AI agent identifiers associated with the incident.
     * @param array<string>|null $value Value to set for the aiAgentIds property.
    */
    public function setAiAgentIds(?array $value): void {
        $this->getBackingStore()->set('aiAgentIds', $value);
    }

    /**
     * Sets the alertCounts property value. A summary of alert counts grouped by severity and status.
     * @param AlertCounts|null $value Value to set for the alertCounts property.
    */
    public function setAlertCounts(?AlertCounts $value): void {
        $this->getBackingStore()->set('alertCounts', $value);
    }

    /**
     * Sets the alertPolicyIds property value. The list of alert policy identifiers associated with the incident.
     * @param array<string>|null $value Value to set for the alertPolicyIds property.
    */
    public function setAlertPolicyIds(?array $value): void {
        $this->getBackingStore()->set('alertPolicyIds', $value);
    }

    /**
     * Sets the assignedTo property value. The user assigned to investigate the incident case.
     * @param string|null $value Value to set for the assignedTo property.
    */
    public function setAssignedTo(?string $value): void {
        $this->getBackingStore()->set('assignedTo', $value);
    }

    /**
     * Sets the associatedThreatIds property value. The list of threat identifiers associated with the incident.
     * @param array<string>|null $value Value to set for the associatedThreatIds property.
    */
    public function setAssociatedThreatIds(?array $value): void {
        $this->getBackingStore()->set('associatedThreatIds', $value);
    }

    /**
     * Sets the categories property value. The incident categories.
     * @param array<string>|null $value Value to set for the categories property.
    */
    public function setCategories(?array $value): void {
        $this->getBackingStore()->set('categories', $value);
    }

    /**
     * Sets the classification property value. The classification property
     * @param IncidentClassification|null $value Value to set for the classification property.
    */
    public function setClassification(?IncidentClassification $value): void {
        $this->getBackingStore()->set('classification', $value);
    }

    /**
     * Sets the cloudScopes property value. The cloud scopes associated with the incident.
     * @param array<string>|null $value Value to set for the cloudScopes property.
    */
    public function setCloudScopes(?array $value): void {
        $this->getBackingStore()->set('cloudScopes', $value);
    }

    /**
     * Sets the dataSensitivityLabels property value. The data sensitivity labels associated with the incident.
     * @param array<string>|null $value Value to set for the dataSensitivityLabels property.
    */
    public function setDataSensitivityLabels(?array $value): void {
        $this->getBackingStore()->set('dataSensitivityLabels', $value);
    }

    /**
     * Sets the dataStreams property value. The data streams associated with the incident.
     * @param array<string>|null $value Value to set for the dataStreams property.
    */
    public function setDataStreams(?array $value): void {
        $this->getBackingStore()->set('dataStreams', $value);
    }

    /**
     * Sets the detectionSources property value. The detection sources that identified the incident.
     * @param array<string>|null $value Value to set for the detectionSources property.
    */
    public function setDetectionSources(?array $value): void {
        $this->getBackingStore()->set('detectionSources', $value);
    }

    /**
     * Sets the determination property value. The determination property
     * @param IncidentDetermination|null $value Value to set for the determination property.
    */
    public function setDetermination(?IncidentDetermination $value): void {
        $this->getBackingStore()->set('determination', $value);
    }

    /**
     * Sets the dueDateTime property value. The target completion date and time for the incident case.
     * @param DateTime|null $value Value to set for the dueDateTime property.
    */
    public function setDueDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('dueDateTime', $value);
    }

    /**
     * Sets the emailNotificationRecipients property value. The email notification recipients for the incident case.
     * @param array<string>|null $value Value to set for the emailNotificationRecipients property.
    */
    public function setEmailNotificationRecipients(?array $value): void {
        $this->getBackingStore()->set('emailNotificationRecipients', $value);
    }

    /**
     * Sets the firstEventTime property value. The date and time of the first event in the incident.
     * @param DateTime|null $value Value to set for the firstEventTime property.
    */
    public function setFirstEventTime(?DateTime $value): void {
        $this->getBackingStore()->set('firstEventTime', $value);
    }

    /**
     * Sets the impactedAssets property value. A summary of impacted asset counts for the incident.
     * @param ImpactedAssetsCounts|null $value Value to set for the impactedAssets property.
    */
    public function setImpactedAssets(?ImpactedAssetsCounts $value): void {
        $this->getBackingStore()->set('impactedAssets', $value);
    }

    /**
     * Sets the incidentId property value. The Microsoft Security incident identifier.
     * @param int|null $value Value to set for the incidentId property.
    */
    public function setIncidentId(?int $value): void {
        $this->getBackingStore()->set('incidentId', $value);
    }

    /**
     * Sets the incidentWebUrl property value. The URL for the incident in the Microsoft Defender portal.
     * @param string|null $value Value to set for the incidentWebUrl property.
    */
    public function setIncidentWebUrl(?string $value): void {
        $this->getBackingStore()->set('incidentWebUrl', $value);
    }

    /**
     * Sets the investigation property value. A summary of investigation details associated with the incident.
     * @param Investigation|null $value Value to set for the investigation property.
    */
    public function setInvestigation(?Investigation $value): void {
        $this->getBackingStore()->set('investigation', $value);
    }

    /**
     * Sets the investigationIds property value. The list of investigation identifiers associated with the incident.
     * @param array<string>|null $value Value to set for the investigationIds property.
    */
    public function setInvestigationIds(?array $value): void {
        $this->getBackingStore()->set('investigationIds', $value);
    }

    /**
     * Sets the investigationStates property value. The list of investigation states associated with the incident.
     * @param array<string>|null $value Value to set for the investigationStates property.
    */
    public function setInvestigationStates(?array $value): void {
        $this->getBackingStore()->set('investigationStates', $value);
    }

    /**
     * Sets the lastEventTime property value. The date and time of the most recent event in the incident.
     * @param DateTime|null $value Value to set for the lastEventTime property.
    */
    public function setLastEventTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastEventTime', $value);
    }

    /**
     * Sets the machineGroupIds property value. The list of machine group identifiers associated with the incident.
     * @param array<string>|null $value Value to set for the machineGroupIds property.
    */
    public function setMachineGroupIds(?array $value): void {
        $this->getBackingStore()->set('machineGroupIds', $value);
    }

    /**
     * Sets the osPlatforms property value. The operating system platforms associated with the incident.
     * @param array<string>|null $value Value to set for the osPlatforms property.
    */
    public function setOsPlatforms(?array $value): void {
        $this->getBackingStore()->set('osPlatforms', $value);
    }

    /**
     * Sets the policyNames property value. The policy names associated with the incident.
     * @param array<string>|null $value Value to set for the policyNames property.
    */
    public function setPolicyNames(?array $value): void {
        $this->getBackingStore()->set('policyNames', $value);
    }

    /**
     * Sets the priorityScore property value. The priority score assigned to the incident.
     * @param int|null $value Value to set for the priorityScore property.
    */
    public function setPriorityScore(?int $value): void {
        $this->getBackingStore()->set('priorityScore', $value);
    }

    /**
     * Sets the productNames property value. The product names associated with the incident.
     * @param array<string>|null $value Value to set for the productNames property.
    */
    public function setProductNames(?array $value): void {
        $this->getBackingStore()->set('productNames', $value);
    }

    /**
     * Sets the redirectCaseId property value. The case identifier to which this case redirects when merged.
     * @param int|null $value Value to set for the redirectCaseId property.
    */
    public function setRedirectCaseId(?int $value): void {
        $this->getBackingStore()->set('redirectCaseId', $value);
    }

    /**
     * Sets the redirectIncidentId property value. The incident identifier to which this incident redirects when merged.
     * @param int|null $value Value to set for the redirectIncidentId property.
    */
    public function setRedirectIncidentId(?int $value): void {
        $this->getBackingStore()->set('redirectIncidentId', $value);
    }

    /**
     * Sets the serviceSources property value. The service sources associated with the incident.
     * @param array<string>|null $value Value to set for the serviceSources property.
    */
    public function setServiceSources(?array $value): void {
        $this->getBackingStore()->set('serviceSources', $value);
    }

    /**
     * Sets the severity property value. The severity property
     * @param IncidentSeverity|null $value Value to set for the severity property.
    */
    public function setSeverity(?IncidentSeverity $value): void {
        $this->getBackingStore()->set('severity', $value);
    }

    /**
     * Sets the summary property value. A summary of the incident.
     * @param string|null $value Value to set for the summary property.
    */
    public function setSummary(?string $value): void {
        $this->getBackingStore()->set('summary', $value);
    }

    /**
     * Sets the systemTags property value. The system tags associated with the incident.
     * @param array<string>|null $value Value to set for the systemTags property.
    */
    public function setSystemTags(?array $value): void {
        $this->getBackingStore()->set('systemTags', $value);
    }

    /**
     * Sets the topRiskScore property value. The top risk score associated with the incident.
     * @param int|null $value Value to set for the topRiskScore property.
    */
    public function setTopRiskScore(?int $value): void {
        $this->getBackingStore()->set('topRiskScore', $value);
    }

    /**
     * Sets the workspaceIds property value. The list of workspace identifiers associated with the incident.
     * @param array<string>|null $value Value to set for the workspaceIds property.
    */
    public function setWorkspaceIds(?array $value): void {
        $this->getBackingStore()->set('workspaceIds', $value);
    }

}
