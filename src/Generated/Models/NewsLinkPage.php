<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class NewsLinkPage extends BaseSitePage implements Parsable 
{
    /**
     * Instantiates a new NewsLinkPage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return NewsLinkPage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): NewsLinkPage {
        return new NewsLinkPage();
    }

    /**
     * Gets the bannerImageWebUrl property value. The bannerImageWebUrl property
     * @return string|null
    */
    public function getBannerImageWebUrl(): ?string {
        $val = $this->getBackingStore()->get('bannerImageWebUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bannerImageWebUrl'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'bannerImageWebUrl' => fn(ParseNode $n) => $o->setBannerImageWebUrl($n->getStringValue()),
            'newsSharepointIds' => fn(ParseNode $n) => $o->setNewsSharepointIds($n->getObjectValue([SharepointIds::class, 'createFromDiscriminatorValue'])),
            'newsWebUrl' => fn(ParseNode $n) => $o->setNewsWebUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the newsSharepointIds property value. The newsSharepointIds property
     * @return SharepointIds|null
    */
    public function getNewsSharepointIds(): ?SharepointIds {
        $val = $this->getBackingStore()->get('newsSharepointIds');
        if (is_null($val) || $val instanceof SharepointIds) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'newsSharepointIds'");
    }

    /**
     * Gets the newsWebUrl property value. The newsWebUrl property
     * @return string|null
    */
    public function getNewsWebUrl(): ?string {
        $val = $this->getBackingStore()->get('newsWebUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'newsWebUrl'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('bannerImageWebUrl', $this->getBannerImageWebUrl());
        $writer->writeObjectValue('newsSharepointIds', $this->getNewsSharepointIds());
        $writer->writeStringValue('newsWebUrl', $this->getNewsWebUrl());
    }

    /**
     * Sets the bannerImageWebUrl property value. The bannerImageWebUrl property
     * @param string|null $value Value to set for the bannerImageWebUrl property.
    */
    public function setBannerImageWebUrl(?string $value): void {
        $this->getBackingStore()->set('bannerImageWebUrl', $value);
    }

    /**
     * Sets the newsSharepointIds property value. The newsSharepointIds property
     * @param SharepointIds|null $value Value to set for the newsSharepointIds property.
    */
    public function setNewsSharepointIds(?SharepointIds $value): void {
        $this->getBackingStore()->set('newsSharepointIds', $value);
    }

    /**
     * Sets the newsWebUrl property value. The newsWebUrl property
     * @param string|null $value Value to set for the newsWebUrl property.
    */
    public function setNewsWebUrl(?string $value): void {
        $this->getBackingStore()->set('newsWebUrl', $value);
    }

}
