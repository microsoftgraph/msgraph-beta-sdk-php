<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use Microsoft\Graph\Beta\Generated\Models\DirectoryObject;
use Microsoft\Graph\Beta\Generated\Models\SubjectSet;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SelectedObjectsSubjectSet extends SubjectSet implements Parsable 
{
    /**
     * Instantiates a new SelectedObjectsSubjectSet and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.identityGovernance.selectedObjectsSubjectSet');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SelectedObjectsSubjectSet
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SelectedObjectsSubjectSet {
        return new SelectedObjectsSubjectSet();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'inScopeObjects' => fn(ParseNode $n) => $o->setInScopeObjects($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the inScopeObjects property value. The inScopeObjects property
     * @return array<DirectoryObject>|null
    */
    public function getInScopeObjects(): ?array {
        $val = $this->getBackingStore()->get('inScopeObjects');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DirectoryObject::class);
            /** @var array<DirectoryObject>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inScopeObjects'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('inScopeObjects', $this->getInScopeObjects());
    }

    /**
     * Sets the inScopeObjects property value. The inScopeObjects property
     * @param array<DirectoryObject>|null $value Value to set for the inScopeObjects property.
    */
    public function setInScopeObjects(?array $value): void {
        $this->getBackingStore()->set('inScopeObjects', $value);
    }

}
