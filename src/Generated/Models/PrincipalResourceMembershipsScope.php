<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrincipalResourceMembershipsScope extends AccessReviewScope implements Parsable 
{
    /**
     * @var array<AccessReviewScope>|null $principalScopes Defines the scopes of the principals whose access to resources are reviewed in the access review.
    */
    private ?array $principalScopes = null;
    
    /**
     * @var array<AccessReviewScope>|null $resourceScopes Defines the scopes of the resources for which access is reviewed.
    */
    private ?array $resourceScopes = null;
    
    /**
     * Instantiates a new PrincipalResourceMembershipsScope and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.principalResourceMembershipsScope');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrincipalResourceMembershipsScope
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrincipalResourceMembershipsScope {
        return new PrincipalResourceMembershipsScope();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'principalScopes' => function (ParseNode $n) use ($o) { $o->setPrincipalScopes($n->getCollectionOfObjectValues(array(AccessReviewScope::class, 'createFromDiscriminatorValue'))); },
            'resourceScopes' => function (ParseNode $n) use ($o) { $o->setResourceScopes($n->getCollectionOfObjectValues(array(AccessReviewScope::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the principalScopes property value. Defines the scopes of the principals whose access to resources are reviewed in the access review.
     * @return array<AccessReviewScope>|null
    */
    public function getPrincipalScopes(): ?array {
        return $this->principalScopes;
    }

    /**
     * Gets the resourceScopes property value. Defines the scopes of the resources for which access is reviewed.
     * @return array<AccessReviewScope>|null
    */
    public function getResourceScopes(): ?array {
        return $this->resourceScopes;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('principalScopes', $this->principalScopes);
        $writer->writeCollectionOfObjectValues('resourceScopes', $this->resourceScopes);
    }

    /**
     * Sets the principalScopes property value. Defines the scopes of the principals whose access to resources are reviewed in the access review.
     *  @param array<AccessReviewScope>|null $value Value to set for the principalScopes property.
    */
    public function setPrincipalScopes(?array $value ): void {
        $this->principalScopes = $value;
    }

    /**
     * Sets the resourceScopes property value. Defines the scopes of the resources for which access is reviewed.
     *  @param array<AccessReviewScope>|null $value Value to set for the resourceScopes property.
    */
    public function setResourceScopes(?array $value ): void {
        $this->resourceScopes = $value;
    }

}
