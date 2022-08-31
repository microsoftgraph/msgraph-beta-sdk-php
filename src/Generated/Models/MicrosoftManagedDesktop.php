<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MicrosoftManagedDesktop implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $profile The name of the Microsoft Managed Desktop profile that the Windows 365 Cloud PC is associated with.
    */
    private ?string $profile = null;
    
    /**
     * @var MicrosoftManagedDesktopType|null $type Indicates whether the provisioning policy enables Microsoft Managed Desktop. It indicates the type of plan under which the device is managed if the provisioning policy is enabled. Possible values are: notManaged, premiumManaged, standardManaged, starterManaged, unknownFutureValue.
    */
    private ?MicrosoftManagedDesktopType $type = null;
    
    /**
     * Instantiates a new microsoftManagedDesktop and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.microsoftManagedDesktop');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MicrosoftManagedDesktop
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MicrosoftManagedDesktop {
        return new MicrosoftManagedDesktop();
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
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'profile' => function (ParseNode $n) use ($o) { $o->setProfile($n->getStringValue()); },
            'type' => function (ParseNode $n) use ($o) { $o->setType($n->getEnumValue(MicrosoftManagedDesktopType::class)); },
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
     * Gets the profile property value. The name of the Microsoft Managed Desktop profile that the Windows 365 Cloud PC is associated with.
     * @return string|null
    */
    public function getProfile(): ?string {
        return $this->profile;
    }

    /**
     * Gets the type property value. Indicates whether the provisioning policy enables Microsoft Managed Desktop. It indicates the type of plan under which the device is managed if the provisioning policy is enabled. Possible values are: notManaged, premiumManaged, standardManaged, starterManaged, unknownFutureValue.
     * @return MicrosoftManagedDesktopType|null
    */
    public function getType(): ?MicrosoftManagedDesktopType {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('profile', $this->profile);
        $writer->writeEnumValue('type', $this->type);
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
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the profile property value. The name of the Microsoft Managed Desktop profile that the Windows 365 Cloud PC is associated with.
     *  @param string|null $value Value to set for the profile property.
    */
    public function setProfile(?string $value ): void {
        $this->profile = $value;
    }

    /**
     * Sets the type property value. Indicates whether the provisioning policy enables Microsoft Managed Desktop. It indicates the type of plan under which the device is managed if the provisioning policy is enabled. Possible values are: notManaged, premiumManaged, standardManaged, starterManaged, unknownFutureValue.
     *  @param MicrosoftManagedDesktopType|null $value Value to set for the type property.
    */
    public function setType(?MicrosoftManagedDesktopType $value ): void {
        $this->type = $value;
    }

}
