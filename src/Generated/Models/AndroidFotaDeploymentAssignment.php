<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidFotaDeploymentAssignment implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $id A unique identifier assigned to each Android FOTA Assignment entity
    */
    private ?string $id = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var AndroidFotaDeploymentAssignmentTarget|null $target The AAD Group we are deploying firmware updates to
    */
    private ?AndroidFotaDeploymentAssignmentTarget $target = null;
    
    /**
     * Instantiates a new androidFotaDeploymentAssignment and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.androidFotaDeploymentAssignment');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidFotaDeploymentAssignment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidFotaDeploymentAssignment {
        return new AndroidFotaDeploymentAssignment();
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
            'id' => function (ParseNode $n) use ($o) { $o->setId($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'target' => function (ParseNode $n) use ($o) { $o->setTarget($n->getObjectValue(array(AndroidFotaDeploymentAssignmentTarget::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the id property value. A unique identifier assigned to each Android FOTA Assignment entity
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the target property value. The AAD Group we are deploying firmware updates to
     * @return AndroidFotaDeploymentAssignmentTarget|null
    */
    public function getTarget(): ?AndroidFotaDeploymentAssignmentTarget {
        return $this->target;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('id', $this->id);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeObjectValue('target', $this->target);
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
     * Sets the id property value. A unique identifier assigned to each Android FOTA Assignment entity
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value ): void {
        $this->id = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the target property value. The AAD Group we are deploying firmware updates to
     *  @param AndroidFotaDeploymentAssignmentTarget|null $value Value to set for the target property.
    */
    public function setTarget(?AndroidFotaDeploymentAssignmentTarget $value ): void {
        $this->target = $value;
    }

}
