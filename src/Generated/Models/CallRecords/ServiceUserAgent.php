<?php

namespace Microsoft\Graph\Beta\Generated\Models\CallRecords;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ServiceUserAgent extends UserAgent implements Parsable 
{
    /**
     * @var ServiceRole|null $role The role property
    */
    private ?ServiceRole $role = null;
    
    /**
     * Instantiates a new ServiceUserAgent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.callRecords.serviceUserAgent');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ServiceUserAgent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ServiceUserAgent {
        return new ServiceUserAgent();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'role' => function (ParseNode $n) use ($o) { $o->setRole($n->getEnumValue(ServiceRole::class)); },
        ]);
    }

    /**
     * Gets the role property value. The role property
     * @return ServiceRole|null
    */
    public function getRole(): ?ServiceRole {
        return $this->role;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('role', $this->role);
    }

    /**
     * Sets the role property value. The role property
     *  @param ServiceRole|null $value Value to set for the role property.
    */
    public function setRole(?ServiceRole $value ): void {
        $this->role = $value;
    }

}
