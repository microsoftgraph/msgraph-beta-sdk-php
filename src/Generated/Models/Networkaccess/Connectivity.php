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
     * Instantiates a new connectivity and sets the default values.
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
     * Gets the branches property value. The branches property
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
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('branches', $this->getBranches());
    }

    /**
     * Sets the branches property value. The branches property
     * @param array<BranchSite>|null $value Value to set for the branches property.
    */
    public function setBranches(?array $value): void {
        $this->getBackingStore()->set('branches', $value);
    }

}
