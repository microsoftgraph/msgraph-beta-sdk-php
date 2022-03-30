<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Command extends Entity 
{
    /** @var string|null $appServiceName  */
    private ?string $appServiceName = null;
    
    /** @var string|null $error  */
    private ?string $error = null;
    
    /** @var string|null $packageFamilyName  */
    private ?string $packageFamilyName = null;
    
    /** @var PayloadRequest|null $payload  */
    private ?PayloadRequest $payload = null;
    
    /** @var string|null $permissionTicket  */
    private ?string $permissionTicket = null;
    
    /** @var string|null $postBackUri  */
    private ?string $postBackUri = null;
    
    /** @var PayloadResponse|null $responsepayload  */
    private ?PayloadResponse $responsepayload = null;
    
    /** @var string|null $status  */
    private ?string $status = null;
    
    /** @var string|null $type  */
    private ?string $type = null;
    
    /**
     * Instantiates a new command and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Command
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): Command {
        return new Command();
    }

    /**
     * Gets the appServiceName property value. 
     * @return string|null
    */
    public function getAppServiceName(): ?string {
        return $this->appServiceName;
    }

    /**
     * Gets the error property value. 
     * @return string|null
    */
    public function getError(): ?string {
        return $this->error;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'appServiceName' => function (self $o, ParseNode $n) { $o->setAppServiceName($n->getStringValue()); },
            'error' => function (self $o, ParseNode $n) { $o->setError($n->getStringValue()); },
            'packageFamilyName' => function (self $o, ParseNode $n) { $o->setPackageFamilyName($n->getStringValue()); },
            'payload' => function (self $o, ParseNode $n) { $o->setPayload($n->getObjectValue(PayloadRequest::class)); },
            'permissionTicket' => function (self $o, ParseNode $n) { $o->setPermissionTicket($n->getStringValue()); },
            'postBackUri' => function (self $o, ParseNode $n) { $o->setPostBackUri($n->getStringValue()); },
            'responsepayload' => function (self $o, ParseNode $n) { $o->setResponsepayload($n->getObjectValue(PayloadResponse::class)); },
            'status' => function (self $o, ParseNode $n) { $o->setStatus($n->getStringValue()); },
            'type' => function (self $o, ParseNode $n) { $o->setType($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the packageFamilyName property value. 
     * @return string|null
    */
    public function getPackageFamilyName(): ?string {
        return $this->packageFamilyName;
    }

    /**
     * Gets the payload property value. 
     * @return PayloadRequest|null
    */
    public function getPayload(): ?PayloadRequest {
        return $this->payload;
    }

    /**
     * Gets the permissionTicket property value. 
     * @return string|null
    */
    public function getPermissionTicket(): ?string {
        return $this->permissionTicket;
    }

    /**
     * Gets the postBackUri property value. 
     * @return string|null
    */
    public function getPostBackUri(): ?string {
        return $this->postBackUri;
    }

    /**
     * Gets the responsepayload property value. 
     * @return PayloadResponse|null
    */
    public function getResponsepayload(): ?PayloadResponse {
        return $this->responsepayload;
    }

    /**
     * Gets the status property value. 
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Gets the type property value. 
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appServiceName', $this->appServiceName);
        $writer->writeStringValue('error', $this->error);
        $writer->writeStringValue('packageFamilyName', $this->packageFamilyName);
        $writer->writeObjectValue('payload', $this->payload);
        $writer->writeStringValue('permissionTicket', $this->permissionTicket);
        $writer->writeStringValue('postBackUri', $this->postBackUri);
        $writer->writeObjectValue('responsepayload', $this->responsepayload);
        $writer->writeStringValue('status', $this->status);
        $writer->writeStringValue('type', $this->type);
    }

    /**
     * Sets the appServiceName property value. 
     *  @param string|null $value Value to set for the appServiceName property.
    */
    public function setAppServiceName(?string $value ): void {
        $this->appServiceName = $value;
    }

    /**
     * Sets the error property value. 
     *  @param string|null $value Value to set for the error property.
    */
    public function setError(?string $value ): void {
        $this->error = $value;
    }

    /**
     * Sets the packageFamilyName property value. 
     *  @param string|null $value Value to set for the packageFamilyName property.
    */
    public function setPackageFamilyName(?string $value ): void {
        $this->packageFamilyName = $value;
    }

    /**
     * Sets the payload property value. 
     *  @param PayloadRequest|null $value Value to set for the payload property.
    */
    public function setPayload(?PayloadRequest $value ): void {
        $this->payload = $value;
    }

    /**
     * Sets the permissionTicket property value. 
     *  @param string|null $value Value to set for the permissionTicket property.
    */
    public function setPermissionTicket(?string $value ): void {
        $this->permissionTicket = $value;
    }

    /**
     * Sets the postBackUri property value. 
     *  @param string|null $value Value to set for the postBackUri property.
    */
    public function setPostBackUri(?string $value ): void {
        $this->postBackUri = $value;
    }

    /**
     * Sets the responsepayload property value. 
     *  @param PayloadResponse|null $value Value to set for the responsepayload property.
    */
    public function setResponsepayload(?PayloadResponse $value ): void {
        $this->responsepayload = $value;
    }

    /**
     * Sets the status property value. 
     *  @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the type property value. 
     *  @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value ): void {
        $this->type = $value;
    }

}
