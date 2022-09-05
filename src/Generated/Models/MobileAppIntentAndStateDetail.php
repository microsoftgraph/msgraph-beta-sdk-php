<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MobileAppIntentAndStateDetail implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $applicationId MobieApp identifier.
    */
    private ?string $applicationId = null;
    
    /**
     * @var string|null $displayName The admin provided or imported title of the app.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $displayVersion Human readable version of the application
    */
    private ?string $displayVersion = null;
    
    /**
     * @var ResultantAppState|null $installState A list of possible states for application status on an individual device. When devices contact the Intune service and find targeted application enforcement intent, the status of the enforcement is recorded and becomes accessible in the Graph API. Since the application status is identified during device interaction with the Intune service, status records do not immediately appear upon application group assignment; it is created only after the assignment is evaluated in the service and devices start receiving the policy during check-ins.
    */
    private ?ResultantAppState $installState = null;
    
    /**
     * @var MobileAppIntent|null $mobileAppIntent Indicates the status of the mobile app on the device.
    */
    private ?MobileAppIntent $mobileAppIntent = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var array<MobileAppSupportedDeviceType>|null $supportedDeviceTypes The supported platforms for the app.
    */
    private ?array $supportedDeviceTypes = null;
    
    /**
     * Instantiates a new mobileAppIntentAndStateDetail and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.mobileAppIntentAndStateDetail');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MobileAppIntentAndStateDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MobileAppIntentAndStateDetail {
        return new MobileAppIntentAndStateDetail();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the applicationId property value. MobieApp identifier.
     * @return string|null
    */
    public function getApplicationId(): ?string {
        return $this->applicationId;
    }

    /**
     * Gets the displayName property value. The admin provided or imported title of the app.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the displayVersion property value. Human readable version of the application
     * @return string|null
    */
    public function getDisplayVersion(): ?string {
        return $this->displayVersion;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'applicationId' => function (ParseNode $n) use ($o) { $o->setApplicationId($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'displayVersion' => function (ParseNode $n) use ($o) { $o->setDisplayVersion($n->getStringValue()); },
            'installState' => function (ParseNode $n) use ($o) { $o->setInstallState($n->getEnumValue(ResultantAppState::class)); },
            'mobileAppIntent' => function (ParseNode $n) use ($o) { $o->setMobileAppIntent($n->getEnumValue(MobileAppIntent::class)); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'supportedDeviceTypes' => function (ParseNode $n) use ($o) { $o->setSupportedDeviceTypes($n->getCollectionOfObjectValues(array(MobileAppSupportedDeviceType::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the installState property value. A list of possible states for application status on an individual device. When devices contact the Intune service and find targeted application enforcement intent, the status of the enforcement is recorded and becomes accessible in the Graph API. Since the application status is identified during device interaction with the Intune service, status records do not immediately appear upon application group assignment; it is created only after the assignment is evaluated in the service and devices start receiving the policy during check-ins.
     * @return ResultantAppState|null
    */
    public function getInstallState(): ?ResultantAppState {
        return $this->installState;
    }

    /**
     * Gets the mobileAppIntent property value. Indicates the status of the mobile app on the device.
     * @return MobileAppIntent|null
    */
    public function getMobileAppIntent(): ?MobileAppIntent {
        return $this->mobileAppIntent;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the supportedDeviceTypes property value. The supported platforms for the app.
     * @return array<MobileAppSupportedDeviceType>|null
    */
    public function getSupportedDeviceTypes(): ?array {
        return $this->supportedDeviceTypes;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('applicationId', $this->applicationId);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('displayVersion', $this->displayVersion);
        $writer->writeEnumValue('installState', $this->installState);
        $writer->writeEnumValue('mobileAppIntent', $this->mobileAppIntent);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeCollectionOfObjectValues('supportedDeviceTypes', $this->supportedDeviceTypes);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the applicationId property value. MobieApp identifier.
     *  @param string|null $value Value to set for the applicationId property.
    */
    public function setApplicationId(?string $value ): void {
        $this->applicationId = $value;
    }

    /**
     * Sets the displayName property value. The admin provided or imported title of the app.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the displayVersion property value. Human readable version of the application
     *  @param string|null $value Value to set for the displayVersion property.
    */
    public function setDisplayVersion(?string $value ): void {
        $this->displayVersion = $value;
    }

    /**
     * Sets the installState property value. A list of possible states for application status on an individual device. When devices contact the Intune service and find targeted application enforcement intent, the status of the enforcement is recorded and becomes accessible in the Graph API. Since the application status is identified during device interaction with the Intune service, status records do not immediately appear upon application group assignment; it is created only after the assignment is evaluated in the service and devices start receiving the policy during check-ins.
     *  @param ResultantAppState|null $value Value to set for the installState property.
    */
    public function setInstallState(?ResultantAppState $value ): void {
        $this->installState = $value;
    }

    /**
     * Sets the mobileAppIntent property value. Indicates the status of the mobile app on the device.
     *  @param MobileAppIntent|null $value Value to set for the mobileAppIntent property.
    */
    public function setMobileAppIntent(?MobileAppIntent $value ): void {
        $this->mobileAppIntent = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the supportedDeviceTypes property value. The supported platforms for the app.
     *  @param array<MobileAppSupportedDeviceType>|null $value Value to set for the supportedDeviceTypes property.
    */
    public function setSupportedDeviceTypes(?array $value ): void {
        $this->supportedDeviceTypes = $value;
    }

}
