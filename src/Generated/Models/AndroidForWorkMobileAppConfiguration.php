<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidForWorkMobileAppConfiguration extends ManagedDeviceMobileAppConfiguration implements Parsable 
{
    /**
     * Instantiates a new AndroidForWorkMobileAppConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.androidForWorkMobileAppConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidForWorkMobileAppConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidForWorkMobileAppConfiguration {
        return new AndroidForWorkMobileAppConfiguration();
    }

    /**
     * Gets the connectedAppsEnabled property value. Setting to specify whether to allow ConnectedApps experience for this app.
     * @return bool|null
    */
    public function getConnectedAppsEnabled(): ?bool {
        return $this->getBackingStore()->get('connectedAppsEnabled');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'connectedAppsEnabled' => fn(ParseNode $n) => $o->setConnectedAppsEnabled($n->getBooleanValue()),
            'packageId' => fn(ParseNode $n) => $o->setPackageId($n->getStringValue()),
            'payloadJson' => fn(ParseNode $n) => $o->setPayloadJson($n->getStringValue()),
            'permissionActions' => fn(ParseNode $n) => $o->setPermissionActions($n->getCollectionOfObjectValues([AndroidPermissionAction::class, 'createFromDiscriminatorValue'])),
            'profileApplicability' => fn(ParseNode $n) => $o->setProfileApplicability($n->getEnumValue(AndroidProfileApplicability::class)),
        ]);
    }

    /**
     * Gets the packageId property value. Android For Work app configuration package id.
     * @return string|null
    */
    public function getPackageId(): ?string {
        return $this->getBackingStore()->get('packageId');
    }

    /**
     * Gets the payloadJson property value. Android For Work app configuration JSON payload.
     * @return string|null
    */
    public function getPayloadJson(): ?string {
        return $this->getBackingStore()->get('payloadJson');
    }

    /**
     * Gets the permissionActions property value. List of Android app permissions and corresponding permission actions.
     * @return array<AndroidPermissionAction>|null
    */
    public function getPermissionActions(): ?array {
        return $this->getBackingStore()->get('permissionActions');
    }

    /**
     * Gets the profileApplicability property value. Android profile applicability
     * @return AndroidProfileApplicability|null
    */
    public function getProfileApplicability(): ?AndroidProfileApplicability {
        return $this->getBackingStore()->get('profileApplicability');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('connectedAppsEnabled', $this->getConnectedAppsEnabled());
        $writer->writeStringValue('packageId', $this->getPackageId());
        $writer->writeStringValue('payloadJson', $this->getPayloadJson());
        $writer->writeCollectionOfObjectValues('permissionActions', $this->getPermissionActions());
        $writer->writeEnumValue('profileApplicability', $this->getProfileApplicability());
    }

    /**
     * Sets the connectedAppsEnabled property value. Setting to specify whether to allow ConnectedApps experience for this app.
     *  @param bool|null $value Value to set for the connectedAppsEnabled property.
    */
    public function setConnectedAppsEnabled(?bool $value): void {
        $this->getBackingStore()->set('connectedAppsEnabled', $value);
    }

    /**
     * Sets the packageId property value. Android For Work app configuration package id.
     *  @param string|null $value Value to set for the packageId property.
    */
    public function setPackageId(?string $value): void {
        $this->getBackingStore()->set('packageId', $value);
    }

    /**
     * Sets the payloadJson property value. Android For Work app configuration JSON payload.
     *  @param string|null $value Value to set for the payloadJson property.
    */
    public function setPayloadJson(?string $value): void {
        $this->getBackingStore()->set('payloadJson', $value);
    }

    /**
     * Sets the permissionActions property value. List of Android app permissions and corresponding permission actions.
     *  @param array<AndroidPermissionAction>|null $value Value to set for the permissionActions property.
    */
    public function setPermissionActions(?array $value): void {
        $this->getBackingStore()->set('permissionActions', $value);
    }

    /**
     * Sets the profileApplicability property value. Android profile applicability
     *  @param AndroidProfileApplicability|null $value Value to set for the profileApplicability property.
    */
    public function setProfileApplicability(?AndroidProfileApplicability $value): void {
        $this->getBackingStore()->set('profileApplicability', $value);
    }

}
