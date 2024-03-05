<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Represents an iOS Web Content Filter setting type, which installs URL bookmarks into iOS built-in browser. An example scenario is in the classroom where teachers would like the students to navigate websites through browser bookmarks configured on their iOS devices, and no access to other sites.
*/
class IosWebContentFilterSpecificWebsitesAccess extends IosWebContentFilterBase implements Parsable 
{
    /**
     * Instantiates a new IosWebContentFilterSpecificWebsitesAccess and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.iosWebContentFilterSpecificWebsitesAccess');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosWebContentFilterSpecificWebsitesAccess
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosWebContentFilterSpecificWebsitesAccess {
        return new IosWebContentFilterSpecificWebsitesAccess();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'specificWebsitesOnly' => fn(ParseNode $n) => $o->setSpecificWebsitesOnly($n->getCollectionOfObjectValues([IosBookmark::class, 'createFromDiscriminatorValue'])),
            'websiteList' => fn(ParseNode $n) => $o->setWebsiteList($n->getCollectionOfObjectValues([IosBookmark::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the specificWebsitesOnly property value. URL bookmarks which will be installed into built-in browser and user is only allowed to access websites through bookmarks. This collection can contain a maximum of 500 elements.
     * @return array<IosBookmark>|null
    */
    public function getSpecificWebsitesOnly(): ?array {
        $val = $this->getBackingStore()->get('specificWebsitesOnly');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, IosBookmark::class);
            /** @var array<IosBookmark>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'specificWebsitesOnly'");
    }

    /**
     * Gets the websiteList property value. URL bookmarks which will be installed into built-in browser and user is only allowed to access websites through bookmarks. This collection can contain a maximum of 500 elements.
     * @return array<IosBookmark>|null
    */
    public function getWebsiteList(): ?array {
        $val = $this->getBackingStore()->get('websiteList');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, IosBookmark::class);
            /** @var array<IosBookmark>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'websiteList'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('specificWebsitesOnly', $this->getSpecificWebsitesOnly());
        $writer->writeCollectionOfObjectValues('websiteList', $this->getWebsiteList());
    }

    /**
     * Sets the specificWebsitesOnly property value. URL bookmarks which will be installed into built-in browser and user is only allowed to access websites through bookmarks. This collection can contain a maximum of 500 elements.
     * @param array<IosBookmark>|null $value Value to set for the specificWebsitesOnly property.
    */
    public function setSpecificWebsitesOnly(?array $value): void {
        $this->getBackingStore()->set('specificWebsitesOnly', $value);
    }

    /**
     * Sets the websiteList property value. URL bookmarks which will be installed into built-in browser and user is only allowed to access websites through bookmarks. This collection can contain a maximum of 500 elements.
     * @param array<IosBookmark>|null $value Value to set for the websiteList property.
    */
    public function setWebsiteList(?array $value): void {
        $this->getBackingStore()->set('websiteList', $value);
    }

}
