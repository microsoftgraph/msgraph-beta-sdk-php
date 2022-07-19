<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagementActionInfo implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $managementActionId The identifier for the management action. Required. Read-only.
    */
    private ?string $managementActionId = null;
    
    /**
     * @var string|null $managementTemplateId The identifier for the management template. Required. Read-only.
    */
    private ?string $managementTemplateId = null;
    
    /**
     * @var int|null $managementTemplateVersion The managementTemplateVersion property
    */
    private ?int $managementTemplateVersion = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new managementActionInfo and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.managedTenants.managementActionInfo');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagementActionInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagementActionInfo {
        return new ManagementActionInfo();
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
            'managementActionId' => function (ParseNode $n) use ($o) { $o->setManagementActionId($n->getStringValue()); },
            'managementTemplateId' => function (ParseNode $n) use ($o) { $o->setManagementTemplateId($n->getStringValue()); },
            'managementTemplateVersion' => function (ParseNode $n) use ($o) { $o->setManagementTemplateVersion($n->getIntegerValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the managementActionId property value. The identifier for the management action. Required. Read-only.
     * @return string|null
    */
    public function getManagementActionId(): ?string {
        return $this->managementActionId;
    }

    /**
     * Gets the managementTemplateId property value. The identifier for the management template. Required. Read-only.
     * @return string|null
    */
    public function getManagementTemplateId(): ?string {
        return $this->managementTemplateId;
    }

    /**
     * Gets the managementTemplateVersion property value. The managementTemplateVersion property
     * @return int|null
    */
    public function getManagementTemplateVersion(): ?int {
        return $this->managementTemplateVersion;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('managementActionId', $this->managementActionId);
        $writer->writeStringValue('managementTemplateId', $this->managementTemplateId);
        $writer->writeIntegerValue('managementTemplateVersion', $this->managementTemplateVersion);
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the managementActionId property value. The identifier for the management action. Required. Read-only.
     *  @param string|null $value Value to set for the managementActionId property.
    */
    public function setManagementActionId(?string $value ): void {
        $this->managementActionId = $value;
    }

    /**
     * Sets the managementTemplateId property value. The identifier for the management template. Required. Read-only.
     *  @param string|null $value Value to set for the managementTemplateId property.
    */
    public function setManagementTemplateId(?string $value ): void {
        $this->managementTemplateId = $value;
    }

    /**
     * Sets the managementTemplateVersion property value. The managementTemplateVersion property
     *  @param int|null $value Value to set for the managementTemplateVersion property.
    */
    public function setManagementTemplateVersion(?int $value ): void {
        $this->managementTemplateVersion = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
