<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkforceIntegration extends ChangeTrackedEntity implements Parsable 
{
    /**
     * Instantiates a new WorkforceIntegration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.workforceIntegration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkforceIntegration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkforceIntegration {
        return new WorkforceIntegration();
    }

    /**
     * Gets the apiVersion property value. API version for the call back URL. Start with 1.
     * @return int|null
    */
    public function getApiVersion(): ?int {
        return $this->getBackingStore()->get('apiVersion');
    }

    /**
     * Gets the displayName property value. Name of the workforce integration.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the eligibilityFilteringEnabledEntities property value. The eligibilityFilteringEnabledEntities property
     * @return EligibilityFilteringEnabledEntities|null
    */
    public function getEligibilityFilteringEnabledEntities(): ?EligibilityFilteringEnabledEntities {
        return $this->getBackingStore()->get('eligibilityFilteringEnabledEntities');
    }

    /**
     * Gets the encryption property value. The workforce integration encryption resource.
     * @return WorkforceIntegrationEncryption|null
    */
    public function getEncryption(): ?WorkforceIntegrationEncryption {
        return $this->getBackingStore()->get('encryption');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'apiVersion' => fn(ParseNode $n) => $o->setApiVersion($n->getIntegerValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'eligibilityFilteringEnabledEntities' => fn(ParseNode $n) => $o->setEligibilityFilteringEnabledEntities($n->getEnumValue(EligibilityFilteringEnabledEntities::class)),
            'encryption' => fn(ParseNode $n) => $o->setEncryption($n->getObjectValue([WorkforceIntegrationEncryption::class, 'createFromDiscriminatorValue'])),
            'isActive' => fn(ParseNode $n) => $o->setIsActive($n->getBooleanValue()),
            'supportedEntities' => fn(ParseNode $n) => $o->setSupportedEntities($n->getEnumValue(WorkforceIntegrationSupportedEntities::class)),
            'supports' => fn(ParseNode $n) => $o->setSupports($n->getEnumValue(WorkforceIntegrationSupportedEntities::class)),
            'url' => fn(ParseNode $n) => $o->setUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isActive property value. Indicates whether this workforce integration is currently active and available.
     * @return bool|null
    */
    public function getIsActive(): ?bool {
        return $this->getBackingStore()->get('isActive');
    }

    /**
     * Gets the supportedEntities property value. This property has replaced supports in v1.0. We recommend that you use this property instead of supports. The supports property is still supported in beta for the time being. The possible values are: none, shift, swapRequest, openshift, openShiftRequest, userShiftPreferences, offerShiftRequest, unknownFutureValue, timeCard, timeOffReason, timeOff, timeOffRequest. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: timeCard, timeOffReason, timeOff, timeOffRequest. If selecting more than one value, all values must start with the first letter in uppercase.
     * @return WorkforceIntegrationSupportedEntities|null
    */
    public function getSupportedEntities(): ?WorkforceIntegrationSupportedEntities {
        return $this->getBackingStore()->get('supportedEntities');
    }

    /**
     * Gets the supports property value. The Shifts entities supported for synchronous change notifications. Shifts will make a call back to the url provided on client changes on those entities added here. By default, no entities are supported for change notifications. The possible values are: none, shift, swapRequest, openshift, openShiftRequest, userShiftPreferences, offerShiftRequest, unknownFutureValue, timeCard, timeOffReason, timeOff, timeOffRequest. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: timeCard, timeOffReason, timeOff, timeOffRequest. If selecting more than one value, all values must start with the first letter in uppercase.
     * @return WorkforceIntegrationSupportedEntities|null
    */
    public function getSupports(): ?WorkforceIntegrationSupportedEntities {
        return $this->getBackingStore()->get('supports');
    }

    /**
     * Gets the url property value. Workforce Integration URL for callbacks from the Shifts service.
     * @return string|null
    */
    public function getUrl(): ?string {
        return $this->getBackingStore()->get('url');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('apiVersion', $this->getApiVersion());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeEnumValue('eligibilityFilteringEnabledEntities', $this->getEligibilityFilteringEnabledEntities());
        $writer->writeObjectValue('encryption', $this->getEncryption());
        $writer->writeBooleanValue('isActive', $this->getIsActive());
        $writer->writeEnumValue('supportedEntities', $this->getSupportedEntities());
        $writer->writeEnumValue('supports', $this->getSupports());
        $writer->writeStringValue('url', $this->getUrl());
    }

    /**
     * Sets the apiVersion property value. API version for the call back URL. Start with 1.
     *  @param int|null $value Value to set for the apiVersion property.
    */
    public function setApiVersion(?int $value): void {
        $this->getBackingStore()->set('apiVersion', $value);
    }

    /**
     * Sets the displayName property value. Name of the workforce integration.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the eligibilityFilteringEnabledEntities property value. The eligibilityFilteringEnabledEntities property
     *  @param EligibilityFilteringEnabledEntities|null $value Value to set for the eligibilityFilteringEnabledEntities property.
    */
    public function setEligibilityFilteringEnabledEntities(?EligibilityFilteringEnabledEntities $value): void {
        $this->getBackingStore()->set('eligibilityFilteringEnabledEntities', $value);
    }

    /**
     * Sets the encryption property value. The workforce integration encryption resource.
     *  @param WorkforceIntegrationEncryption|null $value Value to set for the encryption property.
    */
    public function setEncryption(?WorkforceIntegrationEncryption $value): void {
        $this->getBackingStore()->set('encryption', $value);
    }

    /**
     * Sets the isActive property value. Indicates whether this workforce integration is currently active and available.
     *  @param bool|null $value Value to set for the isActive property.
    */
    public function setIsActive(?bool $value): void {
        $this->getBackingStore()->set('isActive', $value);
    }

    /**
     * Sets the supportedEntities property value. This property has replaced supports in v1.0. We recommend that you use this property instead of supports. The supports property is still supported in beta for the time being. The possible values are: none, shift, swapRequest, openshift, openShiftRequest, userShiftPreferences, offerShiftRequest, unknownFutureValue, timeCard, timeOffReason, timeOff, timeOffRequest. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: timeCard, timeOffReason, timeOff, timeOffRequest. If selecting more than one value, all values must start with the first letter in uppercase.
     *  @param WorkforceIntegrationSupportedEntities|null $value Value to set for the supportedEntities property.
    */
    public function setSupportedEntities(?WorkforceIntegrationSupportedEntities $value): void {
        $this->getBackingStore()->set('supportedEntities', $value);
    }

    /**
     * Sets the supports property value. The Shifts entities supported for synchronous change notifications. Shifts will make a call back to the url provided on client changes on those entities added here. By default, no entities are supported for change notifications. The possible values are: none, shift, swapRequest, openshift, openShiftRequest, userShiftPreferences, offerShiftRequest, unknownFutureValue, timeCard, timeOffReason, timeOff, timeOffRequest. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: timeCard, timeOffReason, timeOff, timeOffRequest. If selecting more than one value, all values must start with the first letter in uppercase.
     *  @param WorkforceIntegrationSupportedEntities|null $value Value to set for the supports property.
    */
    public function setSupports(?WorkforceIntegrationSupportedEntities $value): void {
        $this->getBackingStore()->set('supports', $value);
    }

    /**
     * Sets the url property value. Workforce Integration URL for callbacks from the Shifts service.
     *  @param string|null $value Value to set for the url property.
    */
    public function setUrl(?string $value): void {
        $this->getBackingStore()->set('url', $value);
    }

}
