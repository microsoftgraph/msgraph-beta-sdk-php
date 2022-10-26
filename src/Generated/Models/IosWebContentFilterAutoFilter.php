<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IosWebContentFilterAutoFilter extends IosWebContentFilterBase implements Parsable 
{
    /**
     * @var array<string>|null $allowedUrls Additional URLs allowed for access
    */
    private ?array $allowedUrls = null;
    
    /**
     * @var array<string>|null $blockedUrls Additional URLs blocked for access
    */
    private ?array $blockedUrls = null;
    
    /**
     * Instantiates a new IosWebContentFilterAutoFilter and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.iosWebContentFilterAutoFilter');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosWebContentFilterAutoFilter
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosWebContentFilterAutoFilter {
        return new IosWebContentFilterAutoFilter();
    }

    /**
     * Gets the allowedUrls property value. Additional URLs allowed for access
     * @return array<string>|null
    */
    public function getAllowedUrls(): ?array {
        return $this->allowedUrls;
    }

    /**
     * Gets the blockedUrls property value. Additional URLs blocked for access
     * @return array<string>|null
    */
    public function getBlockedUrls(): ?array {
        return $this->blockedUrls;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowedUrls' => fn(ParseNode $n) => $o->setAllowedUrls($n->getCollectionOfPrimitiveValues()),
            'blockedUrls' => fn(ParseNode $n) => $o->setBlockedUrls($n->getCollectionOfPrimitiveValues()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('allowedUrls', $this->allowedUrls);
        $writer->writeCollectionOfPrimitiveValues('blockedUrls', $this->blockedUrls);
    }

    /**
     * Sets the allowedUrls property value. Additional URLs allowed for access
     *  @param array<string>|null $value Value to set for the allowedUrls property.
    */
    public function setAllowedUrls(?array $value ): void {
        $this->allowedUrls = $value;
    }

    /**
     * Sets the blockedUrls property value. Additional URLs blocked for access
     *  @param array<string>|null $value Value to set for the blockedUrls property.
    */
    public function setBlockedUrls(?array $value ): void {
        $this->blockedUrls = $value;
    }

}
