<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class PersonAward extends ItemFacet implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $description Descpription of the award or honor.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName Name of the award or honor.
    */
    private ?string $displayName = null;
    
    /**
     * @var Date|null $issuedDate The date that the award or honor was granted.
    */
    private ?Date $issuedDate = null;
    
    /**
     * @var string|null $issuingAuthority Authority which granted the award or honor.
    */
    private ?string $issuingAuthority = null;
    
    /**
     * @var string|null $thumbnailUrl URL referencing a thumbnail of the award or honor.
    */
    private ?string $thumbnailUrl = null;
    
    /**
     * @var string|null $webUrl URL referencing the award or honor.
    */
    private ?string $webUrl = null;
    
    /**
     * Instantiates a new PersonAward and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PersonAward
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PersonAward {
        return new PersonAward();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the description property value. Descpription of the award or honor.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. Name of the award or honor.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'issuedDate' => function (ParseNode $n) use ($o) { $o->setIssuedDate($n->getDateValue()); },
            'issuingAuthority' => function (ParseNode $n) use ($o) { $o->setIssuingAuthority($n->getStringValue()); },
            'thumbnailUrl' => function (ParseNode $n) use ($o) { $o->setThumbnailUrl($n->getStringValue()); },
            'webUrl' => function (ParseNode $n) use ($o) { $o->setWebUrl($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the issuedDate property value. The date that the award or honor was granted.
     * @return Date|null
    */
    public function getIssuedDate(): ?Date {
        return $this->issuedDate;
    }

    /**
     * Gets the issuingAuthority property value. Authority which granted the award or honor.
     * @return string|null
    */
    public function getIssuingAuthority(): ?string {
        return $this->issuingAuthority;
    }

    /**
     * Gets the thumbnailUrl property value. URL referencing a thumbnail of the award or honor.
     * @return string|null
    */
    public function getThumbnailUrl(): ?string {
        return $this->thumbnailUrl;
    }

    /**
     * Gets the webUrl property value. URL referencing the award or honor.
     * @return string|null
    */
    public function getWebUrl(): ?string {
        return $this->webUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateValue('issuedDate', $this->issuedDate);
        $writer->writeStringValue('issuingAuthority', $this->issuingAuthority);
        $writer->writeStringValue('thumbnailUrl', $this->thumbnailUrl);
        $writer->writeStringValue('webUrl', $this->webUrl);
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
     * Sets the description property value. Descpription of the award or honor.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. Name of the award or honor.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the issuedDate property value. The date that the award or honor was granted.
     *  @param Date|null $value Value to set for the issuedDate property.
    */
    public function setIssuedDate(?Date $value ): void {
        $this->issuedDate = $value;
    }

    /**
     * Sets the issuingAuthority property value. Authority which granted the award or honor.
     *  @param string|null $value Value to set for the issuingAuthority property.
    */
    public function setIssuingAuthority(?string $value ): void {
        $this->issuingAuthority = $value;
    }

    /**
     * Sets the thumbnailUrl property value. URL referencing a thumbnail of the award or honor.
     *  @param string|null $value Value to set for the thumbnailUrl property.
    */
    public function setThumbnailUrl(?string $value ): void {
        $this->thumbnailUrl = $value;
    }

    /**
     * Sets the webUrl property value. URL referencing the award or honor.
     *  @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value ): void {
        $this->webUrl = $value;
    }

}
