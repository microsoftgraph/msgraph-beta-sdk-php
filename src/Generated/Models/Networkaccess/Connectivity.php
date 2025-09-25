<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Connectivity extends Entity implements Parsable 
{
    /**
     * Instantiates a new Connectivity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Connectivity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Connectivity {
        return new Connectivity();
    }

    /**
     * Gets the branches property value. The locations for connectivity. DEPRECATED AND TO BE RETIRED SOON. Use the remoteNetwork relationship and its associated APIs instead.
     * @return array<BranchSite>|null
    */
    public function getBranches(): ?array {
        $val = $this->getBackingStore()->get('branches');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, BranchSite::class);
            /** @var array<BranchSite>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'branches'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'branches' => fn(ParseNode $n) => $o->setBranches($n->getCollectionOfObjectValues([BranchSite::class, 'createFromDiscriminatorValue'])),
            'remoteNetworks' => fn(ParseNode $n) => $o->setRemoteNetworks($n->getCollectionOfObjectValues([RemoteNetwork::class, 'createFromDiscriminatorValue'])),
            'webCategories' => fn(ParseNode $n) => $o->setWebCategories($n->getCollectionOfObjectValues([WebCategory::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the remoteNetworks property value. The locations, such as branches, that are connected to Global Secure Access services through an IPsec tunnel.
     * @return array<RemoteNetwork>|null
    */
    public function getRemoteNetworks(): ?array {
        $val = $this->getBackingStore()->get('remoteNetworks');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RemoteNetwork::class);
            /** @var array<RemoteNetwork>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'remoteNetworks'");
    }

    /**
     * Gets the webCategories property value. The URL category.
     * @return array<WebCategory>|null
    */
    public function getWebCategories(): ?array {
        $val = $this->getBackingStore()->get('webCategories');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WebCategory::class);
            /** @var array<WebCategory>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'webCategories'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('branches', $this->getBranches());
        $writer->writeCollectionOfObjectValues('remoteNetworks', $this->getRemoteNetworks());
        $writer->writeCollectionOfObjectValues('webCategories', $this->getWebCategories());
    }

    /**
     * Sets the branches property value. The locations for connectivity. DEPRECATED AND TO BE RETIRED SOON. Use the remoteNetwork relationship and its associated APIs instead.
     * @param array<BranchSite>|null $value Value to set for the branches property.
    */
    public function setBranches(?array $value): void {
        $this->getBackingStore()->set('branches', $value);
    }

    /**
     * Sets the remoteNetworks property value. The locations, such as branches, that are connected to Global Secure Access services through an IPsec tunnel.
     * @param array<RemoteNetwork>|null $value Value to set for the remoteNetworks property.
    */
    public function setRemoteNetworks(?array $value): void {
        $this->getBackingStore()->set('remoteNetworks', $value);
    }

    /**
     * Sets the webCategories property value. The URL category.
     * @param array<WebCategory>|null $value Value to set for the webCategories property.
    */
    public function setWebCategories(?array $value): void {
        $this->getBackingStore()->set('webCategories', $value);
    }

}
