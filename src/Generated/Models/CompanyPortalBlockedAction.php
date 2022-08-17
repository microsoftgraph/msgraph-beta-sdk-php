<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CompanyPortalBlockedAction implements AdditionalDataHolder, Parsable 
{
    /**
     * @var CompanyPortalAction|null $action Action on a device that can be executed in the Company Portal
    */
    private ?CompanyPortalAction $action = null;
    
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var OwnerType|null $ownerType Owner type of device.
    */
    private ?OwnerType $ownerType = null;
    
    /**
     * @var DevicePlatformType|null $platform Supported platform types.
    */
    private ?DevicePlatformType $platform = null;
    
    /**
     * Instantiates a new companyPortalBlockedAction and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.companyPortalBlockedAction');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CompanyPortalBlockedAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CompanyPortalBlockedAction {
        return new CompanyPortalBlockedAction();
    }

    /**
     * Gets the action property value. Action on a device that can be executed in the Company Portal
     * @return CompanyPortalAction|null
    */
    public function getAction(): ?CompanyPortalAction {
        return $this->action;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'action' => function (ParseNode $n) use ($o) { $o->setAction($n->getEnumValue(CompanyPortalAction::class)); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'ownerType' => function (ParseNode $n) use ($o) { $o->setOwnerType($n->getEnumValue(OwnerType::class)); },
            'platform' => function (ParseNode $n) use ($o) { $o->setPlatform($n->getEnumValue(DevicePlatformType::class)); },
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the ownerType property value. Owner type of device.
     * @return OwnerType|null
    */
    public function getOwnerType(): ?OwnerType {
        return $this->ownerType;
    }

    /**
     * Gets the platform property value. Supported platform types.
     * @return DevicePlatformType|null
    */
    public function getPlatform(): ?DevicePlatformType {
        return $this->platform;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('action', $this->action);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeEnumValue('ownerType', $this->ownerType);
        $writer->writeEnumValue('platform', $this->platform);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the action property value. Action on a device that can be executed in the Company Portal
     *  @param CompanyPortalAction|null $value Value to set for the action property.
    */
    public function setAction(?CompanyPortalAction $value ): void {
        $this->action = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the ownerType property value. Owner type of device.
     *  @param OwnerType|null $value Value to set for the ownerType property.
    */
    public function setOwnerType(?OwnerType $value ): void {
        $this->ownerType = $value;
    }

    /**
     * Sets the platform property value. Supported platform types.
     *  @param DevicePlatformType|null $value Value to set for the platform property.
    */
    public function setPlatform(?DevicePlatformType $value ): void {
        $this->platform = $value;
    }

}
