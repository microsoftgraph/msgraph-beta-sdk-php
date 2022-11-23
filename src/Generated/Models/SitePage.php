<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SitePage extends BaseItem implements Parsable 
{
    /**
     * Instantiates a new sitePage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.sitePage');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SitePage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SitePage {
        return new SitePage();
    }

    /**
     * Gets the contentType property value. The content type of the page.
     * @return ContentTypeInfo|null
    */
    public function getContentType(): ?ContentTypeInfo {
        return $this->getBackingStore()->get('contentType');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'contentType' => fn(ParseNode $n) => $o->setContentType($n->getObjectValue([ContentTypeInfo::class, 'createFromDiscriminatorValue'])),
            'pageLayoutType' => fn(ParseNode $n) => $o->setPageLayoutType($n->getStringValue()),
            'publishingState' => fn(ParseNode $n) => $o->setPublishingState($n->getObjectValue([PublicationFacet::class, 'createFromDiscriminatorValue'])),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
            'webParts' => fn(ParseNode $n) => $o->setWebParts($n->getCollectionOfObjectValues([WebPart::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the pageLayoutType property value. The pageLayoutType property
     * @return string|null
    */
    public function getPageLayoutType(): ?string {
        return $this->getBackingStore()->get('pageLayoutType');
    }

    /**
     * Gets the publishingState property value. The publishingState property
     * @return PublicationFacet|null
    */
    public function getPublishingState(): ?PublicationFacet {
        return $this->getBackingStore()->get('publishingState');
    }

    /**
     * Gets the title property value. The title property
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->getBackingStore()->get('title');
    }

    /**
     * Gets the webParts property value. The webParts property
     * @return array<WebPart>|null
    */
    public function getWebParts(): ?array {
        return $this->getBackingStore()->get('webParts');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('contentType', $this->getContentType());
        $writer->writeStringValue('pageLayoutType', $this->getPageLayoutType());
        $writer->writeObjectValue('publishingState', $this->getPublishingState());
        $writer->writeStringValue('title', $this->getTitle());
        $writer->writeCollectionOfObjectValues('webParts', $this->getWebParts());
    }

    /**
     * Sets the contentType property value. The content type of the page.
     *  @param ContentTypeInfo|null $value Value to set for the contentType property.
    */
    public function setContentType(?ContentTypeInfo $value): void {
        $this->getBackingStore()->set('contentType', $value);
    }

    /**
     * Sets the pageLayoutType property value. The pageLayoutType property
     *  @param string|null $value Value to set for the pageLayoutType property.
    */
    public function setPageLayoutType(?string $value): void {
        $this->getBackingStore()->set('pageLayoutType', $value);
    }

    /**
     * Sets the publishingState property value. The publishingState property
     *  @param PublicationFacet|null $value Value to set for the publishingState property.
    */
    public function setPublishingState(?PublicationFacet $value): void {
        $this->getBackingStore()->set('publishingState', $value);
    }

    /**
     * Sets the title property value. The title property
     *  @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->getBackingStore()->set('title', $value);
    }

    /**
     * Sets the webParts property value. The webParts property
     *  @param array<WebPart>|null $value Value to set for the webParts property.
    */
    public function setWebParts(?array $value): void {
        $this->getBackingStore()->set('webParts', $value);
    }

}
