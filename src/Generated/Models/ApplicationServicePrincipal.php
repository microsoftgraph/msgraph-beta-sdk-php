<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ApplicationServicePrincipal implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var Application|null $application The application property
    */
    private ?Application $application = null;
    
    /**
     * @var ServicePrincipal|null $servicePrincipal The servicePrincipal property
    */
    private ?ServicePrincipal $servicePrincipal = null;
    
    /**
     * Instantiates a new ApplicationServicePrincipal and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApplicationServicePrincipal
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApplicationServicePrincipal {
        return new ApplicationServicePrincipal();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the application property value. The application property
     * @return Application|null
    */
    public function getApplication(): ?Application {
        return $this->application;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'application' => function (ParseNode $n) use ($o) { $o->setApplication($n->getObjectValue(array(Application::class, 'createFromDiscriminatorValue'))); },
            'servicePrincipal' => function (ParseNode $n) use ($o) { $o->setServicePrincipal($n->getObjectValue(array(ServicePrincipal::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the servicePrincipal property value. The servicePrincipal property
     * @return ServicePrincipal|null
    */
    public function getServicePrincipal(): ?ServicePrincipal {
        return $this->servicePrincipal;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('application', $this->application);
        $writer->writeObjectValue('servicePrincipal', $this->servicePrincipal);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the application property value. The application property
     *  @param Application|null $value Value to set for the application property.
    */
    public function setApplication(?Application $value ): void {
        $this->application = $value;
    }

    /**
     * Sets the servicePrincipal property value. The servicePrincipal property
     *  @param ServicePrincipal|null $value Value to set for the servicePrincipal property.
    */
    public function setServicePrincipal(?ServicePrincipal $value ): void {
        $this->servicePrincipal = $value;
    }

}
