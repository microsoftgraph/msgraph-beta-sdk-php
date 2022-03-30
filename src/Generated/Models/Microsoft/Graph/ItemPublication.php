<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class ItemPublication extends ItemFacet 
{
    /** @var string|null $description Description of the publication. */
    private ?string $description = null;
    
    /** @var string|null $displayName Title of the publication. */
    private ?string $displayName = null;
    
    /** @var Date|null $publishedDate The date that the publication was published. */
    private ?Date $publishedDate = null;
    
    /** @var string|null $publisher Publication or publisher for the publication. */
    private ?string $publisher = null;
    
    /** @var string|null $thumbnailUrl URL referencing a thumbnail of the publication. */
    private ?string $thumbnailUrl = null;
    
    /** @var string|null $webUrl URL referencing the publication. */
    private ?string $webUrl = null;
    
    /**
     * Instantiates a new itemPublication and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ItemPublication
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ItemPublication {
        return new ItemPublication();
    }

    /**
     * Gets the description property value. Description of the publication.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. Title of the publication.
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
        return array_merge(parent::getFieldDeserializers(), [
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'publishedDate' => function (self $o, ParseNode $n) { $o->setPublishedDate($n->getDateValue()); },
            'publisher' => function (self $o, ParseNode $n) { $o->setPublisher($n->getStringValue()); },
            'thumbnailUrl' => function (self $o, ParseNode $n) { $o->setThumbnailUrl($n->getStringValue()); },
            'webUrl' => function (self $o, ParseNode $n) { $o->setWebUrl($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the publishedDate property value. The date that the publication was published.
     * @return Date|null
    */
    public function getPublishedDate(): ?Date {
        return $this->publishedDate;
    }

    /**
     * Gets the publisher property value. Publication or publisher for the publication.
     * @return string|null
    */
    public function getPublisher(): ?string {
        return $this->publisher;
    }

    /**
     * Gets the thumbnailUrl property value. URL referencing a thumbnail of the publication.
     * @return string|null
    */
    public function getThumbnailUrl(): ?string {
        return $this->thumbnailUrl;
    }

    /**
     * Gets the webUrl property value. URL referencing the publication.
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
        $writer->writeDateValue('publishedDate', $this->publishedDate);
        $writer->writeStringValue('publisher', $this->publisher);
        $writer->writeStringValue('thumbnailUrl', $this->thumbnailUrl);
        $writer->writeStringValue('webUrl', $this->webUrl);
    }

    /**
     * Sets the description property value. Description of the publication.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. Title of the publication.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the publishedDate property value. The date that the publication was published.
     *  @param Date|null $value Value to set for the publishedDate property.
    */
    public function setPublishedDate(?Date $value ): void {
        $this->publishedDate = $value;
    }

    /**
     * Sets the publisher property value. Publication or publisher for the publication.
     *  @param string|null $value Value to set for the publisher property.
    */
    public function setPublisher(?string $value ): void {
        $this->publisher = $value;
    }

    /**
     * Sets the thumbnailUrl property value. URL referencing a thumbnail of the publication.
     *  @param string|null $value Value to set for the thumbnailUrl property.
    */
    public function setThumbnailUrl(?string $value ): void {
        $this->thumbnailUrl = $value;
    }

    /**
     * Sets the webUrl property value. URL referencing the publication.
     *  @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value ): void {
        $this->webUrl = $value;
    }

}
