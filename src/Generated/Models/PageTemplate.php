<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PageTemplate extends BaseSitePage implements Parsable 
{
    /**
     * Instantiates a new PageTemplate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PageTemplate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PageTemplate {
        return new PageTemplate();
    }

    /**
     * Gets the canvasLayout property value. The layout of the content in a given SharePoint page template, including horizontal sections and vertical sections.
     * @return CanvasLayout|null
    */
    public function getCanvasLayout(): ?CanvasLayout {
        $val = $this->getBackingStore()->get('canvasLayout');
        if (is_null($val) || $val instanceof CanvasLayout) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'canvasLayout'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'canvasLayout' => fn(ParseNode $n) => $o->setCanvasLayout($n->getObjectValue([CanvasLayout::class, 'createFromDiscriminatorValue'])),
            'titleArea' => fn(ParseNode $n) => $o->setTitleArea($n->getObjectValue([TitleArea::class, 'createFromDiscriminatorValue'])),
            'webParts' => fn(ParseNode $n) => $o->setWebParts($n->getCollectionOfObjectValues([WebPart::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the titleArea property value. The title area on the SharePoint page template.
     * @return TitleArea|null
    */
    public function getTitleArea(): ?TitleArea {
        $val = $this->getBackingStore()->get('titleArea');
        if (is_null($val) || $val instanceof TitleArea) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'titleArea'");
    }

    /**
     * Gets the webParts property value. The collection of web parts on the SharePoint page.
     * @return array<WebPart>|null
    */
    public function getWebParts(): ?array {
        $val = $this->getBackingStore()->get('webParts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WebPart::class);
            /** @var array<WebPart>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'webParts'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('canvasLayout', $this->getCanvasLayout());
        $writer->writeObjectValue('titleArea', $this->getTitleArea());
        $writer->writeCollectionOfObjectValues('webParts', $this->getWebParts());
    }

    /**
     * Sets the canvasLayout property value. The layout of the content in a given SharePoint page template, including horizontal sections and vertical sections.
     * @param CanvasLayout|null $value Value to set for the canvasLayout property.
    */
    public function setCanvasLayout(?CanvasLayout $value): void {
        $this->getBackingStore()->set('canvasLayout', $value);
    }

    /**
     * Sets the titleArea property value. The title area on the SharePoint page template.
     * @param TitleArea|null $value Value to set for the titleArea property.
    */
    public function setTitleArea(?TitleArea $value): void {
        $this->getBackingStore()->set('titleArea', $value);
    }

    /**
     * Sets the webParts property value. The collection of web parts on the SharePoint page.
     * @param array<WebPart>|null $value Value to set for the webParts property.
    */
    public function setWebParts(?array $value): void {
        $this->getBackingStore()->set('webParts', $value);
    }

}
