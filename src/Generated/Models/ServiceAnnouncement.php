<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ServiceAnnouncement extends Entity implements Parsable 
{
    /**
     * @var array<ServiceHealth>|null $healthOverviews A collection of service health information for tenant. This property is a contained navigation property, it is nullable and readonly.
    */
    private ?array $healthOverviews = null;
    
    /**
     * @var array<ServiceHealthIssue>|null $issues A collection of service issues for tenant. This property is a contained navigation property, it is nullable and readonly.
    */
    private ?array $issues = null;
    
    /**
     * @var array<ServiceUpdateMessage>|null $messages A collection of service messages for tenant. This property is a contained navigation property, it is nullable and readonly.
    */
    private ?array $messages = null;
    
    /**
     * Instantiates a new ServiceAnnouncement and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.serviceAnnouncement');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ServiceAnnouncement
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ServiceAnnouncement {
        return new ServiceAnnouncement();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'healthOverviews' => function (ParseNode $n) use ($o) { $o->setHealthOverviews($n->getCollectionOfObjectValues(array(ServiceHealth::class, 'createFromDiscriminatorValue'))); },
            'issues' => function (ParseNode $n) use ($o) { $o->setIssues($n->getCollectionOfObjectValues(array(ServiceHealthIssue::class, 'createFromDiscriminatorValue'))); },
            'messages' => function (ParseNode $n) use ($o) { $o->setMessages($n->getCollectionOfObjectValues(array(ServiceUpdateMessage::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the healthOverviews property value. A collection of service health information for tenant. This property is a contained navigation property, it is nullable and readonly.
     * @return array<ServiceHealth>|null
    */
    public function getHealthOverviews(): ?array {
        return $this->healthOverviews;
    }

    /**
     * Gets the issues property value. A collection of service issues for tenant. This property is a contained navigation property, it is nullable and readonly.
     * @return array<ServiceHealthIssue>|null
    */
    public function getIssues(): ?array {
        return $this->issues;
    }

    /**
     * Gets the messages property value. A collection of service messages for tenant. This property is a contained navigation property, it is nullable and readonly.
     * @return array<ServiceUpdateMessage>|null
    */
    public function getMessages(): ?array {
        return $this->messages;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('healthOverviews', $this->healthOverviews);
        $writer->writeCollectionOfObjectValues('issues', $this->issues);
        $writer->writeCollectionOfObjectValues('messages', $this->messages);
    }

    /**
     * Sets the healthOverviews property value. A collection of service health information for tenant. This property is a contained navigation property, it is nullable and readonly.
     *  @param array<ServiceHealth>|null $value Value to set for the healthOverviews property.
    */
    public function setHealthOverviews(?array $value ): void {
        $this->healthOverviews = $value;
    }

    /**
     * Sets the issues property value. A collection of service issues for tenant. This property is a contained navigation property, it is nullable and readonly.
     *  @param array<ServiceHealthIssue>|null $value Value to set for the issues property.
    */
    public function setIssues(?array $value ): void {
        $this->issues = $value;
    }

    /**
     * Sets the messages property value. A collection of service messages for tenant. This property is a contained navigation property, it is nullable and readonly.
     *  @param array<ServiceUpdateMessage>|null $value Value to set for the messages property.
    */
    public function setMessages(?array $value ): void {
        $this->messages = $value;
    }

}
