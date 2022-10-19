<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidForWorkMobileAppConfiguration extends ManagedDeviceMobileAppConfiguration implements Parsable 
{
    /**
     * @var bool|null $connectedAppsEnabled Setting to specify whether to allow ConnectedApps experience for this app.
    */
    private ?bool $connectedAppsEnabled = null;
    
    /**
     * @var string|null $packageId Android For Work app configuration package id.
    */
    private ?string $packageId = null;
    
    /**
     * @var string|null $payloadJson Android For Work app configuration JSON payload.
    */
    private ?string $payloadJson = null;
    
    /**
     * @var array<AndroidPermissionAction>|null $permissionActions List of Android app permissions and corresponding permission actions.
    */
    private ?array $permissionActions = null;
    
    /**
     * @var AndroidProfileApplicability|null $profileApplicability Android profile applicability
    */
    private ?AndroidProfileApplicability $profileApplicability = null;
    
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
        return $this->connectedAppsEnabled;
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
        return $this->packageId;
    }

    /**
     * Gets the payloadJson property value. Android For Work app configuration JSON payload.
     * @return string|null
    */
    public function getPayloadJson(): ?string {
        return $this->payloadJson;
    }

    /**
     * Gets the permissionActions property value. List of Android app permissions and corresponding permission actions.
     * @return array<AndroidPermissionAction>|null
    */
    public function getPermissionActions(): ?array {
        return $this->permissionActions;
    }

    /**
     * Gets the profileApplicability property value. Android profile applicability
     * @return AndroidProfileApplicability|null
    */
    public function getProfileApplicability(): ?AndroidProfileApplicability {
        return $this->profileApplicability;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('connectedAppsEnabled', $this->connectedAppsEnabled);
        $writer->writeStringValue('packageId', $this->packageId);
        $writer->writeStringValue('payloadJson', $this->payloadJson);
        $writer->writeCollectionOfObjectValues('permissionActions', $this->permissionActions);
        $writer->writeEnumValue('profileApplicability', $this->profileApplicability);
    }

    /**
     * Sets the connectedAppsEnabled property value. Setting to specify whether to allow ConnectedApps experience for this app.
     *  @param bool|null $value Value to set for the connectedAppsEnabled property.
    */
    public function setConnectedAppsEnabled(?bool $value ): void {
        $this->connectedAppsEnabled = $value;
    }

    /**
     * Sets the packageId property value. Android For Work app configuration package id.
     *  @param string|null $value Value to set for the packageId property.
    */
    public function setPackageId(?string $value ): void {
        $this->packageId = $value;
    }

    /**
     * Sets the payloadJson property value. Android For Work app configuration JSON payload.
     *  @param string|null $value Value to set for the payloadJson property.
    */
    public function setPayloadJson(?string $value ): void {
        $this->payloadJson = $value;
    }

    /**
     * Sets the permissionActions property value. List of Android app permissions and corresponding permission actions.
     *  @param array<AndroidPermissionAction>|null $value Value to set for the permissionActions property.
    */
    public function setPermissionActions(?array $value ): void {
        $this->permissionActions = $value;
    }

    /**
     * Sets the profileApplicability property value. Android profile applicability
     *  @param AndroidProfileApplicability|null $value Value to set for the profileApplicability property.
    */
    public function setProfileApplicability(?AndroidProfileApplicability $value ): void {
        $this->profileApplicability = $value;
    }

}
