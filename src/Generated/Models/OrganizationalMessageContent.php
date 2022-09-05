<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OrganizationalMessageContent implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $guidedContentId The ID of the guided content that this content is using
    */
    private ?string $guidedContentId = null;
    
    /**
     * @var OrganizationalMessageLogo|null $logoInfo The logo that will be displayed to the clients. This will contain ether the binary contents of the logo or a url to the logo's location
    */
    private ?OrganizationalMessageLogo $logoInfo = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var array<OrganizationalMessagePlacementDetail>|null $placementDetails Contains the different types of text content that can be displayed to customers along with their localized values
    */
    private ?array $placementDetails = null;
    
    /**
     * Instantiates a new organizationalMessageContent and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.organizationalMessageContent');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrganizationalMessageContent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrganizationalMessageContent {
        return new OrganizationalMessageContent();
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
            'guidedContentId' => function (ParseNode $n) use ($o) { $o->setGuidedContentId($n->getStringValue()); },
            'logoInfo' => function (ParseNode $n) use ($o) { $o->setLogoInfo($n->getObjectValue(array(OrganizationalMessageLogo::class, 'createFromDiscriminatorValue'))); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'placementDetails' => function (ParseNode $n) use ($o) { $o->setPlacementDetails($n->getCollectionOfObjectValues(array(OrganizationalMessagePlacementDetail::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the guidedContentId property value. The ID of the guided content that this content is using
     * @return string|null
    */
    public function getGuidedContentId(): ?string {
        return $this->guidedContentId;
    }

    /**
     * Gets the logoInfo property value. The logo that will be displayed to the clients. This will contain ether the binary contents of the logo or a url to the logo's location
     * @return OrganizationalMessageLogo|null
    */
    public function getLogoInfo(): ?OrganizationalMessageLogo {
        return $this->logoInfo;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the placementDetails property value. Contains the different types of text content that can be displayed to customers along with their localized values
     * @return array<OrganizationalMessagePlacementDetail>|null
    */
    public function getPlacementDetails(): ?array {
        return $this->placementDetails;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('guidedContentId', $this->guidedContentId);
        $writer->writeObjectValue('logoInfo', $this->logoInfo);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeCollectionOfObjectValues('placementDetails', $this->placementDetails);
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
     * Sets the guidedContentId property value. The ID of the guided content that this content is using
     *  @param string|null $value Value to set for the guidedContentId property.
    */
    public function setGuidedContentId(?string $value ): void {
        $this->guidedContentId = $value;
    }

    /**
     * Sets the logoInfo property value. The logo that will be displayed to the clients. This will contain ether the binary contents of the logo or a url to the logo's location
     *  @param OrganizationalMessageLogo|null $value Value to set for the logoInfo property.
    */
    public function setLogoInfo(?OrganizationalMessageLogo $value ): void {
        $this->logoInfo = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the placementDetails property value. Contains the different types of text content that can be displayed to customers along with their localized values
     *  @param array<OrganizationalMessagePlacementDetail>|null $value Value to set for the placementDetails property.
    */
    public function setPlacementDetails(?array $value ): void {
        $this->placementDetails = $value;
    }

}
