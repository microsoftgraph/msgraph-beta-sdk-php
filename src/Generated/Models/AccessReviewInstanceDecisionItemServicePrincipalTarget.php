<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessReviewInstanceDecisionItemServicePrincipalTarget extends AccessReviewInstanceDecisionItemTarget implements Parsable 
{
    /**
     * @var string|null $appId The appId for the service principal entity being reviewed.
    */
    private ?string $appId = null;
    
    /**
     * @var string|null $servicePrincipalDisplayName The display name of the service principal whose access is being reviewed.
    */
    private ?string $servicePrincipalDisplayName = null;
    
    /**
     * @var string|null $servicePrincipalId The servicePrincipalId property
    */
    private ?string $servicePrincipalId = null;
    
    /**
     * Instantiates a new AccessReviewInstanceDecisionItemServicePrincipalTarget and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessReviewInstanceDecisionItemServicePrincipalTarget
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessReviewInstanceDecisionItemServicePrincipalTarget {
        return new AccessReviewInstanceDecisionItemServicePrincipalTarget();
    }

    /**
     * Gets the appId property value. The appId for the service principal entity being reviewed.
     * @return string|null
    */
    public function getAppId(): ?string {
        return $this->appId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appId' => function (ParseNode $n) use ($o) { $o->setAppId($n->getStringValue()); },
            'servicePrincipalDisplayName' => function (ParseNode $n) use ($o) { $o->setServicePrincipalDisplayName($n->getStringValue()); },
            'servicePrincipalId' => function (ParseNode $n) use ($o) { $o->setServicePrincipalId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the servicePrincipalDisplayName property value. The display name of the service principal whose access is being reviewed.
     * @return string|null
    */
    public function getServicePrincipalDisplayName(): ?string {
        return $this->servicePrincipalDisplayName;
    }

    /**
     * Gets the servicePrincipalId property value. The servicePrincipalId property
     * @return string|null
    */
    public function getServicePrincipalId(): ?string {
        return $this->servicePrincipalId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appId', $this->appId);
        $writer->writeStringValue('servicePrincipalDisplayName', $this->servicePrincipalDisplayName);
        $writer->writeStringValue('servicePrincipalId', $this->servicePrincipalId);
    }

    /**
     * Sets the appId property value. The appId for the service principal entity being reviewed.
     *  @param string|null $value Value to set for the appId property.
    */
    public function setAppId(?string $value ): void {
        $this->appId = $value;
    }

    /**
     * Sets the servicePrincipalDisplayName property value. The display name of the service principal whose access is being reviewed.
     *  @param string|null $value Value to set for the servicePrincipalDisplayName property.
    */
    public function setServicePrincipalDisplayName(?string $value ): void {
        $this->servicePrincipalDisplayName = $value;
    }

    /**
     * Sets the servicePrincipalId property value. The servicePrincipalId property
     *  @param string|null $value Value to set for the servicePrincipalId property.
    */
    public function setServicePrincipalId(?string $value ): void {
        $this->servicePrincipalId = $value;
    }

}
