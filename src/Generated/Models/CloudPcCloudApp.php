<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CloudPcCloudApp extends Entity implements Parsable 
{
    /**
     * Instantiates a new CloudPcCloudApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcCloudApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcCloudApp {
        return new CloudPcCloudApp();
    }

    /**
     * Gets the actionFailedErrorCode property value. The actionFailedErrorCode property
     * @return CloudPcCloudAppActionFailedErrorCode|null
    */
    public function getActionFailedErrorCode(): ?CloudPcCloudAppActionFailedErrorCode {
        $val = $this->getBackingStore()->get('actionFailedErrorCode');
        if (is_null($val) || $val instanceof CloudPcCloudAppActionFailedErrorCode) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'actionFailedErrorCode'");
    }

    /**
     * Gets the actionFailedErrorMessage property value. The actionFailedErrorMessage property
     * @return string|null
    */
    public function getActionFailedErrorMessage(): ?string {
        $val = $this->getBackingStore()->get('actionFailedErrorMessage');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'actionFailedErrorMessage'");
    }

    /**
     * Gets the addedDateTime property value. The addedDateTime property
     * @return DateTime|null
    */
    public function getAddedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('addedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'addedDateTime'");
    }

    /**
     * Gets the appDetail property value. The appDetail property
     * @return CloudPcCloudAppDetail|null
    */
    public function getAppDetail(): ?CloudPcCloudAppDetail {
        $val = $this->getBackingStore()->get('appDetail');
        if (is_null($val) || $val instanceof CloudPcCloudAppDetail) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appDetail'");
    }

    /**
     * Gets the appStatus property value. The appStatus property
     * @return CloudPcCloudAppStatus|null
    */
    public function getAppStatus(): ?CloudPcCloudAppStatus {
        $val = $this->getBackingStore()->get('appStatus');
        if (is_null($val) || $val instanceof CloudPcCloudAppStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appStatus'");
    }

    /**
     * Gets the availableToUser property value. The availableToUser property
     * @return bool|null
    */
    public function getAvailableToUser(): ?bool {
        $val = $this->getBackingStore()->get('availableToUser');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'availableToUser'");
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the discoveredAppName property value. The discoveredAppName property
     * @return string|null
    */
    public function getDiscoveredAppName(): ?string {
        $val = $this->getBackingStore()->get('discoveredAppName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'discoveredAppName'");
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'actionFailedErrorCode' => fn(ParseNode $n) => $o->setActionFailedErrorCode($n->getEnumValue(CloudPcCloudAppActionFailedErrorCode::class)),
            'actionFailedErrorMessage' => fn(ParseNode $n) => $o->setActionFailedErrorMessage($n->getStringValue()),
            'addedDateTime' => fn(ParseNode $n) => $o->setAddedDateTime($n->getDateTimeValue()),
            'appDetail' => fn(ParseNode $n) => $o->setAppDetail($n->getObjectValue([CloudPcCloudAppDetail::class, 'createFromDiscriminatorValue'])),
            'appStatus' => fn(ParseNode $n) => $o->setAppStatus($n->getEnumValue(CloudPcCloudAppStatus::class)),
            'availableToUser' => fn(ParseNode $n) => $o->setAvailableToUser($n->getBooleanValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'discoveredAppName' => fn(ParseNode $n) => $o->setDiscoveredAppName($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastPublishedDateTime' => fn(ParseNode $n) => $o->setLastPublishedDateTime($n->getDateTimeValue()),
            'provisioningPolicyId' => fn(ParseNode $n) => $o->setProvisioningPolicyId($n->getStringValue()),
            'scopeIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setScopeIds($val);
            },
        ]);
    }

    /**
     * Gets the lastPublishedDateTime property value. The lastPublishedDateTime property
     * @return DateTime|null
    */
    public function getLastPublishedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastPublishedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastPublishedDateTime'");
    }

    /**
     * Gets the provisioningPolicyId property value. The provisioningPolicyId property
     * @return string|null
    */
    public function getProvisioningPolicyId(): ?string {
        $val = $this->getBackingStore()->get('provisioningPolicyId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'provisioningPolicyId'");
    }

    /**
     * Gets the scopeIds property value. The scopeIds property
     * @return array<string>|null
    */
    public function getScopeIds(): ?array {
        $val = $this->getBackingStore()->get('scopeIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scopeIds'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('actionFailedErrorCode', $this->getActionFailedErrorCode());
        $writer->writeStringValue('actionFailedErrorMessage', $this->getActionFailedErrorMessage());
        $writer->writeDateTimeValue('addedDateTime', $this->getAddedDateTime());
        $writer->writeObjectValue('appDetail', $this->getAppDetail());
        $writer->writeEnumValue('appStatus', $this->getAppStatus());
        $writer->writeBooleanValue('availableToUser', $this->getAvailableToUser());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('discoveredAppName', $this->getDiscoveredAppName());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('lastPublishedDateTime', $this->getLastPublishedDateTime());
        $writer->writeStringValue('provisioningPolicyId', $this->getProvisioningPolicyId());
        $writer->writeCollectionOfPrimitiveValues('scopeIds', $this->getScopeIds());
    }

    /**
     * Sets the actionFailedErrorCode property value. The actionFailedErrorCode property
     * @param CloudPcCloudAppActionFailedErrorCode|null $value Value to set for the actionFailedErrorCode property.
    */
    public function setActionFailedErrorCode(?CloudPcCloudAppActionFailedErrorCode $value): void {
        $this->getBackingStore()->set('actionFailedErrorCode', $value);
    }

    /**
     * Sets the actionFailedErrorMessage property value. The actionFailedErrorMessage property
     * @param string|null $value Value to set for the actionFailedErrorMessage property.
    */
    public function setActionFailedErrorMessage(?string $value): void {
        $this->getBackingStore()->set('actionFailedErrorMessage', $value);
    }

    /**
     * Sets the addedDateTime property value. The addedDateTime property
     * @param DateTime|null $value Value to set for the addedDateTime property.
    */
    public function setAddedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('addedDateTime', $value);
    }

    /**
     * Sets the appDetail property value. The appDetail property
     * @param CloudPcCloudAppDetail|null $value Value to set for the appDetail property.
    */
    public function setAppDetail(?CloudPcCloudAppDetail $value): void {
        $this->getBackingStore()->set('appDetail', $value);
    }

    /**
     * Sets the appStatus property value. The appStatus property
     * @param CloudPcCloudAppStatus|null $value Value to set for the appStatus property.
    */
    public function setAppStatus(?CloudPcCloudAppStatus $value): void {
        $this->getBackingStore()->set('appStatus', $value);
    }

    /**
     * Sets the availableToUser property value. The availableToUser property
     * @param bool|null $value Value to set for the availableToUser property.
    */
    public function setAvailableToUser(?bool $value): void {
        $this->getBackingStore()->set('availableToUser', $value);
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the discoveredAppName property value. The discoveredAppName property
     * @param string|null $value Value to set for the discoveredAppName property.
    */
    public function setDiscoveredAppName(?string $value): void {
        $this->getBackingStore()->set('discoveredAppName', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastPublishedDateTime property value. The lastPublishedDateTime property
     * @param DateTime|null $value Value to set for the lastPublishedDateTime property.
    */
    public function setLastPublishedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastPublishedDateTime', $value);
    }

    /**
     * Sets the provisioningPolicyId property value. The provisioningPolicyId property
     * @param string|null $value Value to set for the provisioningPolicyId property.
    */
    public function setProvisioningPolicyId(?string $value): void {
        $this->getBackingStore()->set('provisioningPolicyId', $value);
    }

    /**
     * Sets the scopeIds property value. The scopeIds property
     * @param array<string>|null $value Value to set for the scopeIds property.
    */
    public function setScopeIds(?array $value): void {
        $this->getBackingStore()->set('scopeIds', $value);
    }

}
