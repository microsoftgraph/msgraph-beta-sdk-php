<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Contains properties, inherited properties and actions for Android Enterprise mobile app configurations.
*/
class AndroidManagedStoreAppConfiguration extends ManagedDeviceMobileAppConfiguration implements Parsable 
{
    /**
     * Instantiates a new androidManagedStoreAppConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.androidManagedStoreAppConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidManagedStoreAppConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidManagedStoreAppConfiguration {
        return new AndroidManagedStoreAppConfiguration();
    }

    /**
     * Gets the appSupportsOemConfig property value. Whether or not this AppConfig is an OEMConfig policy.
     * @return bool|null
    */
    public function getAppSupportsOemConfig(): ?bool {
        $val = $this->getBackingStore()->get('appSupportsOemConfig');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appSupportsOemConfig'");
    }

    /**
     * Gets the connectedAppsEnabled property value. Setting to specify whether to allow ConnectedApps experience for this app.
     * @return bool|null
    */
    public function getConnectedAppsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('connectedAppsEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'connectedAppsEnabled'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appSupportsOemConfig' => fn(ParseNode $n) => $o->setAppSupportsOemConfig($n->getBooleanValue()),
            'connectedAppsEnabled' => fn(ParseNode $n) => $o->setConnectedAppsEnabled($n->getBooleanValue()),
            'packageId' => fn(ParseNode $n) => $o->setPackageId($n->getStringValue()),
            'payloadJson' => fn(ParseNode $n) => $o->setPayloadJson($n->getStringValue()),
            'permissionActions' => fn(ParseNode $n) => $o->setPermissionActions($n->getCollectionOfObjectValues([AndroidPermissionAction::class, 'createFromDiscriminatorValue'])),
            'profileApplicability' => fn(ParseNode $n) => $o->setProfileApplicability($n->getEnumValue(AndroidProfileApplicability::class)),
        ]);
    }

    /**
     * Gets the packageId property value. Android Enterprise app configuration package id.
     * @return string|null
    */
    public function getPackageId(): ?string {
        $val = $this->getBackingStore()->get('packageId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'packageId'");
    }

    /**
     * Gets the payloadJson property value. Android Enterprise app configuration JSON payload.
     * @return string|null
    */
    public function getPayloadJson(): ?string {
        $val = $this->getBackingStore()->get('payloadJson');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'payloadJson'");
    }

    /**
     * Gets the permissionActions property value. List of Android app permissions and corresponding permission actions.
     * @return array<AndroidPermissionAction>|null
    */
    public function getPermissionActions(): ?array {
        $val = $this->getBackingStore()->get('permissionActions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AndroidPermissionAction::class);
            /** @var array<AndroidPermissionAction>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'permissionActions'");
    }

    /**
     * Gets the profileApplicability property value. Android profile applicability
     * @return AndroidProfileApplicability|null
    */
    public function getProfileApplicability(): ?AndroidProfileApplicability {
        $val = $this->getBackingStore()->get('profileApplicability');
        if (is_null($val) || $val instanceof AndroidProfileApplicability) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'profileApplicability'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('appSupportsOemConfig', $this->getAppSupportsOemConfig());
        $writer->writeBooleanValue('connectedAppsEnabled', $this->getConnectedAppsEnabled());
        $writer->writeStringValue('packageId', $this->getPackageId());
        $writer->writeStringValue('payloadJson', $this->getPayloadJson());
        $writer->writeCollectionOfObjectValues('permissionActions', $this->getPermissionActions());
        $writer->writeEnumValue('profileApplicability', $this->getProfileApplicability());
    }

    /**
     * Sets the appSupportsOemConfig property value. Whether or not this AppConfig is an OEMConfig policy.
     * @param bool|null $value Value to set for the appSupportsOemConfig property.
    */
    public function setAppSupportsOemConfig(?bool $value): void {
        $this->getBackingStore()->set('appSupportsOemConfig', $value);
    }

    /**
     * Sets the connectedAppsEnabled property value. Setting to specify whether to allow ConnectedApps experience for this app.
     * @param bool|null $value Value to set for the connectedAppsEnabled property.
    */
    public function setConnectedAppsEnabled(?bool $value): void {
        $this->getBackingStore()->set('connectedAppsEnabled', $value);
    }

    /**
     * Sets the packageId property value. Android Enterprise app configuration package id.
     * @param string|null $value Value to set for the packageId property.
    */
    public function setPackageId(?string $value): void {
        $this->getBackingStore()->set('packageId', $value);
    }

    /**
     * Sets the payloadJson property value. Android Enterprise app configuration JSON payload.
     * @param string|null $value Value to set for the payloadJson property.
    */
    public function setPayloadJson(?string $value): void {
        $this->getBackingStore()->set('payloadJson', $value);
    }

    /**
     * Sets the permissionActions property value. List of Android app permissions and corresponding permission actions.
     * @param array<AndroidPermissionAction>|null $value Value to set for the permissionActions property.
    */
    public function setPermissionActions(?array $value): void {
        $this->getBackingStore()->set('permissionActions', $value);
    }

    /**
     * Sets the profileApplicability property value. Android profile applicability
     * @param AndroidProfileApplicability|null $value Value to set for the profileApplicability property.
    */
    public function setProfileApplicability(?AndroidProfileApplicability $value): void {
        $this->getBackingStore()->set('profileApplicability', $value);
    }

}
