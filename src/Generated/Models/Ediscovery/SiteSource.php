<?php

namespace Microsoft\Graph\Beta\Generated\Models\Ediscovery;

use Microsoft\Graph\Beta\Generated\Models\Site;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class \Microsoft\Graph\Beta\Generated\Models\Ediscovery\SiteSource extends \Microsoft\Graph\Beta\Generated\Models\Ediscovery\DataSource implements Parsable 
{
    /**
     * Instantiates a new siteSource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.ediscovery.siteSource');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return \Microsoft\Graph\Beta\Generated\Models\Ediscovery\SiteSource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): \Microsoft\Graph\Beta\Generated\Models\Ediscovery\SiteSource {
        return new \Microsoft\Graph\Beta\Generated\Models\Ediscovery\SiteSource();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'site' => fn(ParseNode $n) => $o->setSite($n->getObjectValue([Site::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the site property value. The site property
     * @return Site|null
    */
    public function getSite(): ?Site {
        $val = $this->getBackingStore()->get('site');
        if (is_null($val) || $val instanceof Site) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'site'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('site', $this->getSite());
    }

    /**
     * Sets the site property value. The site property
     * @param Site|null $value Value to set for the site property.
    */
    public function setSite(?Site $value): void {
        $this->getBackingStore()->set('site', $value);
    }

}
