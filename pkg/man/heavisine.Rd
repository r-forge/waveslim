\name{heavisine}
\alias{heavisine}
\title{Sine with Jumps at 0.3 and 0.72}
\description{
  \deqn{\mbox{heavisine}(x) = 4\sin(4{\pi}x) - \mbox{sign}(x-0.3) -
    \mbox{sign}(0.72-x)}{%
    heavisine(x) = 4*sin(4*pi*x) - sign(x-0.3) - sign(0.72-x)}
}
\usage{data(heavisine)
}
\format{A vector containing 512 observations.
}
\source{S+WAVELETS.
}
\references{
  Bruce, A., and H.-Y. Gao (1996)
  \emph{Applied Wavelet Analysis with S-PLUS}, Springer: New York.
}
\keyword{datasets}
