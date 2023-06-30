<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SitePage extends BaseItem implements Parsable 
{
    /**
     * Instantiates a new SitePage and sets the default values.
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
     * Gets the canvasLayout property value. Indicates the layout of the content in a given SharePoint page, including horizontal sections and vertical section
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
     * Gets the contentType property value. Inherited from baseItem.
     * @return ContentTypeInfo|null
    */
    public function getContentType(): ?ContentTypeInfo {
        $val = $this->getBackingStore()->get('contentType');
        if (is_null($val) || $val instanceof ContentTypeInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'canvasLayout' => fn(ParseNode $n) => $o->setCanvasLayout($n->getObjectValue([CanvasLayout::class, 'createFromDiscriminatorValue'])),
            'contentType' => fn(ParseNode $n) => $o->setContentType($n->getObjectValue([ContentTypeInfo::class, 'createFromDiscriminatorValue'])),
            'pageLayout' => fn(ParseNode $n) => $o->setPageLayout($n->getEnumValue(PageLayoutType::class)),
            'promotionKind' => fn(ParseNode $n) => $o->setPromotionKind($n->getEnumValue(PagePromotionType::class)),
            'publishingState' => fn(ParseNode $n) => $o->setPublishingState($n->getObjectValue([PublicationFacet::class, 'createFromDiscriminatorValue'])),
            'reactions' => fn(ParseNode $n) => $o->setReactions($n->getObjectValue([ReactionsFacet::class, 'createFromDiscriminatorValue'])),
            'showComments' => fn(ParseNode $n) => $o->setShowComments($n->getBooleanValue()),
            'showRecommendedPages' => fn(ParseNode $n) => $o->setShowRecommendedPages($n->getBooleanValue()),
            'thumbnailWebUrl' => fn(ParseNode $n) => $o->setThumbnailWebUrl($n->getStringValue()),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
            'titleArea' => fn(ParseNode $n) => $o->setTitleArea($n->getObjectValue([TitleArea::class, 'createFromDiscriminatorValue'])),
            'webParts' => fn(ParseNode $n) => $o->setWebParts($n->getCollectionOfObjectValues([WebPart::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the pageLayout property value. The name of the page layout of the page. The possible values are: microsoftReserved, article, home, unknownFutureValue.
     * @return PageLayoutType|null
    */
    public function getPageLayout(): ?PageLayoutType {
        $val = $this->getBackingStore()->get('pageLayout');
        if (is_null($val) || $val instanceof PageLayoutType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pageLayout'");
    }

    /**
     * Gets the promotionKind property value. Indicates the promotion kind of the sitePage. The possible values are: microsoftReserved, page, newsPost, unknownFutureValue.
     * @return PagePromotionType|null
    */
    public function getPromotionKind(): ?PagePromotionType {
        $val = $this->getBackingStore()->get('promotionKind');
        if (is_null($val) || $val instanceof PagePromotionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'promotionKind'");
    }

    /**
     * Gets the publishingState property value. The publishing status and the MM.mm version of the page.
     * @return PublicationFacet|null
    */
    public function getPublishingState(): ?PublicationFacet {
        $val = $this->getBackingStore()->get('publishingState');
        if (is_null($val) || $val instanceof PublicationFacet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'publishingState'");
    }

    /**
     * Gets the reactions property value. Reactions information for the page.
     * @return ReactionsFacet|null
    */
    public function getReactions(): ?ReactionsFacet {
        $val = $this->getBackingStore()->get('reactions');
        if (is_null($val) || $val instanceof ReactionsFacet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reactions'");
    }

    /**
     * Gets the showComments property value. Determines whether or not to show comments at the bottom of the page.
     * @return bool|null
    */
    public function getShowComments(): ?bool {
        $val = $this->getBackingStore()->get('showComments');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'showComments'");
    }

    /**
     * Gets the showRecommendedPages property value. Determines whether or not to show recommended pages at the bottom of the page.
     * @return bool|null
    */
    public function getShowRecommendedPages(): ?bool {
        $val = $this->getBackingStore()->get('showRecommendedPages');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'showRecommendedPages'");
    }

    /**
     * Gets the thumbnailWebUrl property value. Url of the sitePage's thumbnail image
     * @return string|null
    */
    public function getThumbnailWebUrl(): ?string {
        $val = $this->getBackingStore()->get('thumbnailWebUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'thumbnailWebUrl'");
    }

    /**
     * Gets the title property value. Title of the sitePage.
     * @return string|null
    */
    public function getTitle(): ?string {
        $val = $this->getBackingStore()->get('title');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'title'");
    }

    /**
     * Gets the titleArea property value. Title area on the SharePoint page.
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
     * Gets the webParts property value. Collection of webparts on the SharePoint page
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
        $writer->writeObjectValue('contentType', $this->getContentType());
        $writer->writeEnumValue('pageLayout', $this->getPageLayout());
        $writer->writeEnumValue('promotionKind', $this->getPromotionKind());
        $writer->writeObjectValue('publishingState', $this->getPublishingState());
        $writer->writeObjectValue('reactions', $this->getReactions());
        $writer->writeBooleanValue('showComments', $this->getShowComments());
        $writer->writeBooleanValue('showRecommendedPages', $this->getShowRecommendedPages());
        $writer->writeStringValue('thumbnailWebUrl', $this->getThumbnailWebUrl());
        $writer->writeStringValue('title', $this->getTitle());
        $writer->writeObjectValue('titleArea', $this->getTitleArea());
        $writer->writeCollectionOfObjectValues('webParts', $this->getWebParts());
    }

    /**
     * Sets the canvasLayout property value. Indicates the layout of the content in a given SharePoint page, including horizontal sections and vertical section
     * @param CanvasLayout|null $value Value to set for the canvasLayout property.
    */
    public function setCanvasLayout(?CanvasLayout $value): void {
        $this->getBackingStore()->set('canvasLayout', $value);
    }

    /**
     * Sets the contentType property value. Inherited from baseItem.
     * @param ContentTypeInfo|null $value Value to set for the contentType property.
    */
    public function setContentType(?ContentTypeInfo $value): void {
        $this->getBackingStore()->set('contentType', $value);
    }

    /**
     * Sets the pageLayout property value. The name of the page layout of the page. The possible values are: microsoftReserved, article, home, unknownFutureValue.
     * @param PageLayoutType|null $value Value to set for the pageLayout property.
    */
    public function setPageLayout(?PageLayoutType $value): void {
        $this->getBackingStore()->set('pageLayout', $value);
    }

    /**
     * Sets the promotionKind property value. Indicates the promotion kind of the sitePage. The possible values are: microsoftReserved, page, newsPost, unknownFutureValue.
     * @param PagePromotionType|null $value Value to set for the promotionKind property.
    */
    public function setPromotionKind(?PagePromotionType $value): void {
        $this->getBackingStore()->set('promotionKind', $value);
    }

    /**
     * Sets the publishingState property value. The publishing status and the MM.mm version of the page.
     * @param PublicationFacet|null $value Value to set for the publishingState property.
    */
    public function setPublishingState(?PublicationFacet $value): void {
        $this->getBackingStore()->set('publishingState', $value);
    }

    /**
     * Sets the reactions property value. Reactions information for the page.
     * @param ReactionsFacet|null $value Value to set for the reactions property.
    */
    public function setReactions(?ReactionsFacet $value): void {
        $this->getBackingStore()->set('reactions', $value);
    }

    /**
     * Sets the showComments property value. Determines whether or not to show comments at the bottom of the page.
     * @param bool|null $value Value to set for the showComments property.
    */
    public function setShowComments(?bool $value): void {
        $this->getBackingStore()->set('showComments', $value);
    }

    /**
     * Sets the showRecommendedPages property value. Determines whether or not to show recommended pages at the bottom of the page.
     * @param bool|null $value Value to set for the showRecommendedPages property.
    */
    public function setShowRecommendedPages(?bool $value): void {
        $this->getBackingStore()->set('showRecommendedPages', $value);
    }

    /**
     * Sets the thumbnailWebUrl property value. Url of the sitePage's thumbnail image
     * @param string|null $value Value to set for the thumbnailWebUrl property.
    */
    public function setThumbnailWebUrl(?string $value): void {
        $this->getBackingStore()->set('thumbnailWebUrl', $value);
    }

    /**
     * Sets the title property value. Title of the sitePage.
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->getBackingStore()->set('title', $value);
    }

    /**
     * Sets the titleArea property value. Title area on the SharePoint page.
     * @param TitleArea|null $value Value to set for the titleArea property.
    */
    public function setTitleArea(?TitleArea $value): void {
        $this->getBackingStore()->set('titleArea', $value);
    }

    /**
     * Sets the webParts property value. Collection of webparts on the SharePoint page
     * @param array<WebPart>|null $value Value to set for the webParts property.
    */
    public function setWebParts(?array $value): void {
        $this->getBackingStore()->set('webParts', $value);
    }

}
