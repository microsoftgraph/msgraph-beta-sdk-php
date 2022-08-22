<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OrganizationalMessagePlacementDetail implements AdditionalDataHolder, Parsable 
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
     * @var OrganizationalMessagePlacement|null $placement Indicates the name of the placement. Possible values are: default, card0, card1, card2, card3.
    */
    private ?OrganizationalMessagePlacement $placement = null;
    
    /**
     * @var array<OrganizationalMessageVariant>|null $variants The list of different variants that can be displayed for this placement
    */
    private ?array $variants = null;
    
    /**
     * Instantiates a new organizationalMessagePlacementDetail and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.organizationalMessagePlacementDetail');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrganizationalMessagePlacementDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrganizationalMessagePlacementDetail {
        return new OrganizationalMessagePlacementDetail();
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
            'placement' => function (ParseNode $n) use ($o) { $o->setPlacement($n->getEnumValue(OrganizationalMessagePlacement::class)); },
            'variants' => function (ParseNode $n) use ($o) { $o->setVariants($n->getCollectionOfObjectValues(array(OrganizationalMessageVariant::class, 'createFromDiscriminatorValue'))); },
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
     * Gets the placement property value. Indicates the name of the placement. Possible values are: default, card0, card1, card2, card3.
     * @return OrganizationalMessagePlacement|null
    */
    public function getPlacement(): ?OrganizationalMessagePlacement {
        return $this->placement;
    }

    /**
     * Gets the variants property value. The list of different variants that can be displayed for this placement
     * @return array<OrganizationalMessageVariant>|null
    */
    public function getVariants(): ?array {
        return $this->variants;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeEnumValue('placement', $this->placement);
        $writer->writeCollectionOfObjectValues('variants', $this->variants);
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
     * Sets the placement property value. Indicates the name of the placement. Possible values are: default, card0, card1, card2, card3.
     *  @param OrganizationalMessagePlacement|null $value Value to set for the placement property.
    */
    public function setPlacement(?OrganizationalMessagePlacement $value ): void {
        $this->placement = $value;
    }

    /**
     * Sets the variants property value. The list of different variants that can be displayed for this placement
     *  @param array<OrganizationalMessageVariant>|null $value Value to set for the variants property.
    */
    public function setVariants(?array $value ): void {
        $this->variants = $value;
    }

}
