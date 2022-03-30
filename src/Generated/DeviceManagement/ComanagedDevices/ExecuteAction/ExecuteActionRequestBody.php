<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\ExecuteAction;

use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ManagedDeviceRemoteAction;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExecuteActionRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var ManagedDeviceRemoteAction|null $actionName  */
    private ?ManagedDeviceRemoteAction $actionName = null;
    
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $carrierUrl  */
    private ?string $carrierUrl = null;
    
    /** @var string|null $deprovisionReason  */
    private ?string $deprovisionReason = null;
    
    /** @var array<string>|null $deviceIds  */
    private ?array $deviceIds = null;
    
    /** @var string|null $deviceName  */
    private ?string $deviceName = null;
    
    /** @var bool|null $keepEnrollmentData  */
    private ?bool $keepEnrollmentData = null;
    
    /** @var bool|null $keepUserData  */
    private ?bool $keepUserData = null;
    
    /** @var string|null $notificationBody  */
    private ?string $notificationBody = null;
    
    /** @var string|null $notificationTitle  */
    private ?string $notificationTitle = null;
    
    /** @var string|null $organizationalUnitPath  */
    private ?string $organizationalUnitPath = null;
    
    /** @var bool|null $persistEsimDataPlan  */
    private ?bool $persistEsimDataPlan = null;
    
    /**
     * Instantiates a new executeActionRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExecuteActionRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ExecuteActionRequestBody {
        return new ExecuteActionRequestBody();
    }

    /**
     * Gets the actionName property value. 
     * @return ManagedDeviceRemoteAction|null
    */
    public function getActionName(): ?ManagedDeviceRemoteAction {
        return $this->actionName;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the carrierUrl property value. 
     * @return string|null
    */
    public function getCarrierUrl(): ?string {
        return $this->carrierUrl;
    }

    /**
     * Gets the deprovisionReason property value. 
     * @return string|null
    */
    public function getDeprovisionReason(): ?string {
        return $this->deprovisionReason;
    }

    /**
     * Gets the deviceIds property value. 
     * @return array<string>|null
    */
    public function getDeviceIds(): ?array {
        return $this->deviceIds;
    }

    /**
     * Gets the deviceName property value. 
     * @return string|null
    */
    public function getDeviceName(): ?string {
        return $this->deviceName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'actionName' => function (self $o, ParseNode $n) { $o->setActionName($n->getEnumValue(ManagedDeviceRemoteAction::class)); },
            'carrierUrl' => function (self $o, ParseNode $n) { $o->setCarrierUrl($n->getStringValue()); },
            'deprovisionReason' => function (self $o, ParseNode $n) { $o->setDeprovisionReason($n->getStringValue()); },
            'deviceIds' => function (self $o, ParseNode $n) { $o->setDeviceIds($n->getCollectionOfPrimitiveValues()); },
            'deviceName' => function (self $o, ParseNode $n) { $o->setDeviceName($n->getStringValue()); },
            'keepEnrollmentData' => function (self $o, ParseNode $n) { $o->setKeepEnrollmentData($n->getBooleanValue()); },
            'keepUserData' => function (self $o, ParseNode $n) { $o->setKeepUserData($n->getBooleanValue()); },
            'notificationBody' => function (self $o, ParseNode $n) { $o->setNotificationBody($n->getStringValue()); },
            'notificationTitle' => function (self $o, ParseNode $n) { $o->setNotificationTitle($n->getStringValue()); },
            'organizationalUnitPath' => function (self $o, ParseNode $n) { $o->setOrganizationalUnitPath($n->getStringValue()); },
            'persistEsimDataPlan' => function (self $o, ParseNode $n) { $o->setPersistEsimDataPlan($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the keepEnrollmentData property value. 
     * @return bool|null
    */
    public function getKeepEnrollmentData(): ?bool {
        return $this->keepEnrollmentData;
    }

    /**
     * Gets the keepUserData property value. 
     * @return bool|null
    */
    public function getKeepUserData(): ?bool {
        return $this->keepUserData;
    }

    /**
     * Gets the notificationBody property value. 
     * @return string|null
    */
    public function getNotificationBody(): ?string {
        return $this->notificationBody;
    }

    /**
     * Gets the notificationTitle property value. 
     * @return string|null
    */
    public function getNotificationTitle(): ?string {
        return $this->notificationTitle;
    }

    /**
     * Gets the organizationalUnitPath property value. 
     * @return string|null
    */
    public function getOrganizationalUnitPath(): ?string {
        return $this->organizationalUnitPath;
    }

    /**
     * Gets the persistEsimDataPlan property value. 
     * @return bool|null
    */
    public function getPersistEsimDataPlan(): ?bool {
        return $this->persistEsimDataPlan;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('actionName', $this->actionName);
        $writer->writeStringValue('carrierUrl', $this->carrierUrl);
        $writer->writeStringValue('deprovisionReason', $this->deprovisionReason);
        $writer->writeCollectionOfPrimitiveValues('deviceIds', $this->deviceIds);
        $writer->writeStringValue('deviceName', $this->deviceName);
        $writer->writeBooleanValue('keepEnrollmentData', $this->keepEnrollmentData);
        $writer->writeBooleanValue('keepUserData', $this->keepUserData);
        $writer->writeStringValue('notificationBody', $this->notificationBody);
        $writer->writeStringValue('notificationTitle', $this->notificationTitle);
        $writer->writeStringValue('organizationalUnitPath', $this->organizationalUnitPath);
        $writer->writeBooleanValue('persistEsimDataPlan', $this->persistEsimDataPlan);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the actionName property value. 
     *  @param ManagedDeviceRemoteAction|null $value Value to set for the actionName property.
    */
    public function setActionName(?ManagedDeviceRemoteAction $value ): void {
        $this->actionName = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the carrierUrl property value. 
     *  @param string|null $value Value to set for the carrierUrl property.
    */
    public function setCarrierUrl(?string $value ): void {
        $this->carrierUrl = $value;
    }

    /**
     * Sets the deprovisionReason property value. 
     *  @param string|null $value Value to set for the deprovisionReason property.
    */
    public function setDeprovisionReason(?string $value ): void {
        $this->deprovisionReason = $value;
    }

    /**
     * Sets the deviceIds property value. 
     *  @param array<string>|null $value Value to set for the deviceIds property.
    */
    public function setDeviceIds(?array $value ): void {
        $this->deviceIds = $value;
    }

    /**
     * Sets the deviceName property value. 
     *  @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value ): void {
        $this->deviceName = $value;
    }

    /**
     * Sets the keepEnrollmentData property value. 
     *  @param bool|null $value Value to set for the keepEnrollmentData property.
    */
    public function setKeepEnrollmentData(?bool $value ): void {
        $this->keepEnrollmentData = $value;
    }

    /**
     * Sets the keepUserData property value. 
     *  @param bool|null $value Value to set for the keepUserData property.
    */
    public function setKeepUserData(?bool $value ): void {
        $this->keepUserData = $value;
    }

    /**
     * Sets the notificationBody property value. 
     *  @param string|null $value Value to set for the notificationBody property.
    */
    public function setNotificationBody(?string $value ): void {
        $this->notificationBody = $value;
    }

    /**
     * Sets the notificationTitle property value. 
     *  @param string|null $value Value to set for the notificationTitle property.
    */
    public function setNotificationTitle(?string $value ): void {
        $this->notificationTitle = $value;
    }

    /**
     * Sets the organizationalUnitPath property value. 
     *  @param string|null $value Value to set for the organizationalUnitPath property.
    */
    public function setOrganizationalUnitPath(?string $value ): void {
        $this->organizationalUnitPath = $value;
    }

    /**
     * Sets the persistEsimDataPlan property value. 
     *  @param bool|null $value Value to set for the persistEsimDataPlan property.
    */
    public function setPersistEsimDataPlan(?bool $value ): void {
        $this->persistEsimDataPlan = $value;
    }

}
