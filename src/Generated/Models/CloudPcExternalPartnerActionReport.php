<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CloudPcExternalPartnerActionReport implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CloudPcExternalPartnerActionReport and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcExternalPartnerActionReport
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcExternalPartnerActionReport {
        return new CloudPcExternalPartnerActionReport();
    }

    /**
     * Gets the actionType property value. The actionType property
     * @return CloudPcExternalPartnerActionType|null
    */
    public function getActionType(): ?CloudPcExternalPartnerActionType {
        $val = $this->getBackingStore()->get('actionType');
        if (is_null($val) || $val instanceof CloudPcExternalPartnerActionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'actionType'");
    }

    /**
     * Gets the activityId property value. The ID of external partner activity. Read-only.
     * @return string|null
    */
    public function getActivityId(): ?string {
        $val = $this->getBackingStore()->get('activityId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activityId'");
    }

    /**
     * Gets the activityMessage property value. The message of external partner activity. Read-only.
     * @return string|null
    */
    public function getActivityMessage(): ?string {
        $val = $this->getBackingStore()->get('activityMessage');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activityMessage'");
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the agentName property value. The agent name of the external partner. Read-only.
     * @return string|null
    */
    public function getAgentName(): ?string {
        $val = $this->getBackingStore()->get('agentName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agentName'");
    }

    /**
     * Gets the agentSetting property value. The agent setting of the external partner. Read-only.
     * @return CloudPcExternalPartnerAgentSetting|null
    */
    public function getAgentSetting(): ?CloudPcExternalPartnerAgentSetting {
        $val = $this->getBackingStore()->get('agentSetting');
        if (is_null($val) || $val instanceof CloudPcExternalPartnerAgentSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agentSetting'");
    }

    /**
     * Gets the authenticatedAppId property value. Indicates the authenticated Microsoft Entra (Azure AD) app ID of the action request. Read-only.
     * @return string|null
    */
    public function getAuthenticatedAppId(): ?string {
        $val = $this->getBackingStore()->get('authenticatedAppId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticatedAppId'");
    }

    /**
     * Gets the authenticatedAppName property value. Indicates the authenticated Microsoft Entra (Azure AD) app name of the action request. Read-only.
     * @return string|null
    */
    public function getAuthenticatedAppName(): ?string {
        $val = $this->getBackingStore()->get('authenticatedAppName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticatedAppName'");
    }

    /**
     * Gets the authenticatedMethod property value. The authenticatedMethod property
     * @return CloudPcExternalPartnerAuthenticatedMethod|null
    */
    public function getAuthenticatedMethod(): ?CloudPcExternalPartnerAuthenticatedMethod {
        $val = $this->getBackingStore()->get('authenticatedMethod');
        if (is_null($val) || $val instanceof CloudPcExternalPartnerAuthenticatedMethod) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticatedMethod'");
    }

    /**
     * Gets the authenticatedUserPrincipalName property value. Indicates the authenticated Microsoft Entra (Azure AD) user principal name of the action request. Read-only.
     * @return string|null
    */
    public function getAuthenticatedUserPrincipalName(): ?string {
        $val = $this->getBackingStore()->get('authenticatedUserPrincipalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticatedUserPrincipalName'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the cloudPcId property value. The Cloud PC's ID of the partner agent is deployed. Read-only.
     * @return string|null
    */
    public function getCloudPcId(): ?string {
        $val = $this->getBackingStore()->get('cloudPcId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudPcId'");
    }

    /**
     * Gets the cloudPcName property value. The Cloud PC's Name of the partner agent is deployed. Read-only.
     * @return string|null
    */
    public function getCloudPcName(): ?string {
        $val = $this->getBackingStore()->get('cloudPcName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudPcName'");
    }

    /**
     * Gets the createdDateTime property value. The create time of the action. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'actionType' => fn(ParseNode $n) => $o->setActionType($n->getEnumValue(CloudPcExternalPartnerActionType::class)),
            'activityId' => fn(ParseNode $n) => $o->setActivityId($n->getStringValue()),
            'activityMessage' => fn(ParseNode $n) => $o->setActivityMessage($n->getStringValue()),
            'agentName' => fn(ParseNode $n) => $o->setAgentName($n->getStringValue()),
            'agentSetting' => fn(ParseNode $n) => $o->setAgentSetting($n->getObjectValue([CloudPcExternalPartnerAgentSetting::class, 'createFromDiscriminatorValue'])),
            'authenticatedAppId' => fn(ParseNode $n) => $o->setAuthenticatedAppId($n->getStringValue()),
            'authenticatedAppName' => fn(ParseNode $n) => $o->setAuthenticatedAppName($n->getStringValue()),
            'authenticatedMethod' => fn(ParseNode $n) => $o->setAuthenticatedMethod($n->getEnumValue(CloudPcExternalPartnerAuthenticatedMethod::class)),
            'authenticatedUserPrincipalName' => fn(ParseNode $n) => $o->setAuthenticatedUserPrincipalName($n->getStringValue()),
            'cloudPcId' => fn(ParseNode $n) => $o->setCloudPcId($n->getStringValue()),
            'cloudPcName' => fn(ParseNode $n) => $o->setCloudPcName($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('actionType', $this->getActionType());
        $writer->writeStringValue('activityId', $this->getActivityId());
        $writer->writeStringValue('activityMessage', $this->getActivityMessage());
        $writer->writeStringValue('agentName', $this->getAgentName());
        $writer->writeObjectValue('agentSetting', $this->getAgentSetting());
        $writer->writeStringValue('authenticatedAppId', $this->getAuthenticatedAppId());
        $writer->writeStringValue('authenticatedAppName', $this->getAuthenticatedAppName());
        $writer->writeEnumValue('authenticatedMethod', $this->getAuthenticatedMethod());
        $writer->writeStringValue('authenticatedUserPrincipalName', $this->getAuthenticatedUserPrincipalName());
        $writer->writeStringValue('cloudPcId', $this->getCloudPcId());
        $writer->writeStringValue('cloudPcName', $this->getCloudPcName());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the actionType property value. The actionType property
     * @param CloudPcExternalPartnerActionType|null $value Value to set for the actionType property.
    */
    public function setActionType(?CloudPcExternalPartnerActionType $value): void {
        $this->getBackingStore()->set('actionType', $value);
    }

    /**
     * Sets the activityId property value. The ID of external partner activity. Read-only.
     * @param string|null $value Value to set for the activityId property.
    */
    public function setActivityId(?string $value): void {
        $this->getBackingStore()->set('activityId', $value);
    }

    /**
     * Sets the activityMessage property value. The message of external partner activity. Read-only.
     * @param string|null $value Value to set for the activityMessage property.
    */
    public function setActivityMessage(?string $value): void {
        $this->getBackingStore()->set('activityMessage', $value);
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the agentName property value. The agent name of the external partner. Read-only.
     * @param string|null $value Value to set for the agentName property.
    */
    public function setAgentName(?string $value): void {
        $this->getBackingStore()->set('agentName', $value);
    }

    /**
     * Sets the agentSetting property value. The agent setting of the external partner. Read-only.
     * @param CloudPcExternalPartnerAgentSetting|null $value Value to set for the agentSetting property.
    */
    public function setAgentSetting(?CloudPcExternalPartnerAgentSetting $value): void {
        $this->getBackingStore()->set('agentSetting', $value);
    }

    /**
     * Sets the authenticatedAppId property value. Indicates the authenticated Microsoft Entra (Azure AD) app ID of the action request. Read-only.
     * @param string|null $value Value to set for the authenticatedAppId property.
    */
    public function setAuthenticatedAppId(?string $value): void {
        $this->getBackingStore()->set('authenticatedAppId', $value);
    }

    /**
     * Sets the authenticatedAppName property value. Indicates the authenticated Microsoft Entra (Azure AD) app name of the action request. Read-only.
     * @param string|null $value Value to set for the authenticatedAppName property.
    */
    public function setAuthenticatedAppName(?string $value): void {
        $this->getBackingStore()->set('authenticatedAppName', $value);
    }

    /**
     * Sets the authenticatedMethod property value. The authenticatedMethod property
     * @param CloudPcExternalPartnerAuthenticatedMethod|null $value Value to set for the authenticatedMethod property.
    */
    public function setAuthenticatedMethod(?CloudPcExternalPartnerAuthenticatedMethod $value): void {
        $this->getBackingStore()->set('authenticatedMethod', $value);
    }

    /**
     * Sets the authenticatedUserPrincipalName property value. Indicates the authenticated Microsoft Entra (Azure AD) user principal name of the action request. Read-only.
     * @param string|null $value Value to set for the authenticatedUserPrincipalName property.
    */
    public function setAuthenticatedUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('authenticatedUserPrincipalName', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the cloudPcId property value. The Cloud PC's ID of the partner agent is deployed. Read-only.
     * @param string|null $value Value to set for the cloudPcId property.
    */
    public function setCloudPcId(?string $value): void {
        $this->getBackingStore()->set('cloudPcId', $value);
    }

    /**
     * Sets the cloudPcName property value. The Cloud PC's Name of the partner agent is deployed. Read-only.
     * @param string|null $value Value to set for the cloudPcName property.
    */
    public function setCloudPcName(?string $value): void {
        $this->getBackingStore()->set('cloudPcName', $value);
    }

    /**
     * Sets the createdDateTime property value. The create time of the action. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
